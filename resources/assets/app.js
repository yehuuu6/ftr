/*
 * This is the main JavaScript used by Vite to build the app.js file.
 */

import collapse from "@alpinejs/collapse";

document.addEventListener("alpine:init", () => {
  Alpine.plugin(collapse);
});
