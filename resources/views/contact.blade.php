@extends('layout')

@section('konten')
    <section class="contact" id="contact">
        <div class="center-text" data-aos="zoom-in-down">
            <h2>Contact<span> Me </span></h2>
        </div>
        <div id="alertContainer" class="alert-container"></div>
        <div class="contact-form" data-aos="zoom-in-up">
            <form id="contactForm" action="https://formspree.io/f/xpzvvdjz" method="POST">
                <input type="text" name="name" placeholder="Your Name" required>
                <input type="email" name="email" placeholder="Email Address" required>
                <textarea name="message" cols="30" rows="10" placeholder="Write Message Here" required></textarea>
                <input type="submit" name="submit" value="Send Message" class="send-btn">
            </form>
        </div>
    </section>

    <script>
        document.getElementById('contactForm').addEventListener('submit', function(event) {
            event.preventDefault(); // Prevent the default form submission

            const form = event.target;
            const alertContainer = document.getElementById('alertContainer');

            // Clear previous alerts
            alertContainer.innerHTML = '';

            // Create a new FormData object
            const formData = new FormData(form);

            // Send the form data using Fetch API
            fetch(form.action, {
                method: form.method,
                body: formData,
                headers: {
                    'Accept': 'application/json'
                }
            }).then(response => {
                if (response.ok) {
                    // Clear the form fields if the submission is successful
                    form.reset();
                    showAlert('Message sent successfully!', 'success');
                } else {
                    showAlert('Failed to send the message. Please try again.', 'error');
                }
            }).catch(error => {
                console.error('Error:', error);
                showAlert('An error occurred. Please try again.', 'error');
            });
        });

        function showAlert(message, type) {
            const alertContainer = document.getElementById('alertContainer');
            const alert = document.createElement('div');
            alert.className = `alert alert-${type}`;
            alert.textContent = message;
            alertContainer.appendChild(alert);

            // Automatically hide the alert after 5 seconds
            setTimeout(() => {
                alert.remove();
            }, 3000);
        }
    </script>
@endsection
