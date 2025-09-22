"use strict";

document.addEventListener("DOMContentLoaded", function () {
    const module = document.querySelector("#module");
    // module.addEventListener("change", loadPhrase);
    $(module).on("change", loadPhrase);

    loadPhrase();
});

async function loadPhrase() {
    const code = document.querySelector("#code").value;

    const data = { code: code, module: module.value };
    const params = new URLSearchParams(data).toString();
    const url = `${module.dataset.url}?${params}`;

    try {
        const response = await fetch(url, {
            method: "GET",
            headers: { Accept: "application/json" },
        });

        const data = await response.json();

        if (!response.ok) {
            data.message ? swalAlert(data.message, "error") : "";
            throw new Error(`HTTP error! status: ${response.status}`);
        }

        const tableBody = document.querySelector("#phrases-table tbody");
        tableBody.innerHTML = "";

        Object.entries(data.phrases).forEach(([key, value], index) => {
            const newRow = tableBody.insertRow();
            newRow.innerHTML = `
                <td>${index + 1}</td>
                <td>${transformTerm(key)}</td>
                <td class="w-75"><input type="text" class="form-control" name="phrases[${key}]" value="${value}" /></td>
            `;
        });
    } catch (error) {
        console.error("Error:", error);
    }
}

function transformTerm(term) {
    term = term.toLowerCase(); // Convert to lowercase
    term = term.replace(/[_-]/g, " "); // Replace underscores and hyphens with spaces
    // term = term.replace(/\b\w/g, (char) => char.toUpperCase()); // Capitalize the first letter of each word
    term = term.replace(/^./, (char) => char.toUpperCase()); // Capitalize the first character of the string
    return term;
}
