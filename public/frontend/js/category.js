            $(document).ready(function() {
            $('#category').change(function() {
                let categoryId = $(this).val();
                let doctorDropdown = $('#doctor');
                doctorDropdown.html('<option>Loading...</option>');

                let url = '/get-doctors/' + (categoryId ? categoryId : 'all'); // handle all categories

                $.ajax({
                    url: url,
                    type: 'GET',
                    success: function(data) {
                        let options = '<option value="">All Doctors</option>';
                        if (data.length > 0) {
                            $.each(data, function(key, doctor) {
                                options +=
                                    `<option value="${doctor.id}">${doctor.name}</option>`;
                            });
                        } else {
                            options += '<option value="">No doctors available</option>';
                        }
                        doctorDropdown.html(options);
                    },
                    error: function() {
                        doctorDropdown.html('<option value="">No doctors available</option>');
                    }
                });
            });
        });
