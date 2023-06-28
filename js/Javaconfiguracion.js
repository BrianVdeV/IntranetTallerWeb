
let selectedLanguage = "es";
let selectedCurrency = "usd";
let notificationsEnabled = false;
let selectedTheme = "light";

// Load saved values from local storage if they exist
if (localStorage.getItem("language")) {
  selectedLanguage = localStorage.getItem("language");
  document.getElementById("language").value = selectedLanguage;
}

if (localStorage.getItem("currency")) {
  selectedCurrency = localStorage.getItem("currency");
  document.getElementById("currency-" + selectedCurrency).checked = true;
}

if (localStorage.getItem("notifications")) {
  notificationsEnabled = localStorage.getItem("notifications") === "true";
  document.getElementById("notifications").checked = notificationsEnabled;
}

if (localStorage.getItem("theme")) {
  selectedTheme = localStorage.getItem("theme");
  document.getElementById("theme-" + selectedTheme).checked = true;
}

// Update page based on user preferences
function updatePage() {
  // Update selected values
  selectedLanguage = document.getElementById("language").value;
  selectedCurrency = document.querySelector('input[name="currency"]:checked').value;
  notificationsEnabled = document.getElementById("notifications").checked;
  selectedTheme = document.querySelector('input[name="theme"]:checked').value;

  // Save selected values to local storage
  localStorage.setItem("language", selectedLanguage);
  localStorage.setItem("currency", selectedCurrency);
  localStorage.setItem("notifications", notificationsEnabled);
  localStorage.setItem("theme", selectedTheme);

  // Update page based on selected values
  document.documentElement.lang = selectedLanguage;
  document.documentElement.dataset.currency = selectedCurrency;
  document.body.classList.toggle("notifications-enabled", notificationsEnabled);
  document.body.classList.toggle("theme-light", selectedTheme === "light");
  document.body.classList.toggle("theme-dark", selectedTheme === "dark");
}


function cambiarFondo(color) { 

    document.body.style.backgroundColor = color;
}



updatePage();
