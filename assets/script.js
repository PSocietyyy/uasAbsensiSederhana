const sidebar = document.getElementById("default-sidebar");
const toggleButton = document.querySelector(
  '[data-drawer-toggle="default-sidebar"]'
);

// Ketika tombol di click
toggleButton.addEventListener("click", () => {
  sidebar.classList.toggle("-translate-x-full");
});

// Ketika di click diluar maka akan close sidebar
document.addEventListener("click", (event) => {
  const isSidebarOpen = !sidebar.classList.contains("-translate-x-full");

  if (
    isSidebarOpen &&
    !sidebar.contains(event.target) &&
    !toggleButton.contains(event.target)
  ) {
    sidebar.classList.add("-translate-x-full");
  }
});
