$("#myForm").validate({
    rules:
    {
        first_name: {
            required: true,
            minlength: 4,
        },
        last_name: {
            required: true,
            minlength: 4,
        },
        email: {
            required: true,
            email: true,
        },
        password: {
            required: true,
            equalTo: "#password",
        },
    }
});
