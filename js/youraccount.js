function togglePassword(fieldId) {
    const passwordField = document.getElementById(fieldId);
    const fieldType = passwordField.getAttribute("type");
    if (fieldType === "password") {
      passwordField.setAttribute("type", "text");
    } else {
      passwordField.setAttribute("type", "password");
    }
  }
  