const form = document.getElementById("contactForm");
const sendBtn = form.querySelector("button[type='submit']");
const btnText = sendBtn.querySelector(".btn-text");

// Function to show popup messages with status
function showPopup(message, type = "success") {
    const popup = document.getElementById("popupMessage");

    popup.innerText = message;

    // Remove previous state classes
    popup.classList.remove("success", "error");

    // Add new state class
    popup.classList.add(type);

    // Show popup
    popup.classList.add("show");

    setTimeout(() => {
        popup.classList.remove("show");
    }, 4000);
}

form.addEventListener("submit", function (e) {
    e.preventDefault();

    // Start loading: disable button, show stripes overlay, fade text
    sendBtn.disabled = true;
    sendBtn.style.cursor = "not-allowed";
    sendBtn.classList.add("loading");
    if (btnText) btnText.style.opacity = "0.7";

    // Get form data
    let data = new FormData(form);

    // Send via AJAX POST
    fetch("../includes/sendmail.php", {
        method: "POST",
        body: data
    })
        .then(res => res.text())
        .then(response => {
            // Determine status from response text (optional: customize logic)
            const isSuccess = response.toLowerCase().includes("success");
            showPopup(response, isSuccess ? "success" : "error");

            // Reset form and button state
            form.reset();
            sendBtn.disabled = false;
            sendBtn.style.cursor = "pointer";
            sendBtn.classList.remove("loading");
            if (btnText) btnText.style.opacity = "1";
        })
        .catch(() => {
            showPopup("Message not sent", "error");

            // Reset button state on error
            sendBtn.disabled = false;
            sendBtn.style.cursor = "pointer";
            sendBtn.classList.remove("loading");
            if (btnText) btnText.style.opacity = "1";
        });
});