// Backpack Admin Panel JavaScript Fixes

(function () {
    "use strict";

    // Function to ensure body can always scroll
    function forceBodyScrollable() {
        document.body.style.overflow = "visible";
        document.body.style.position = "static";
        document.documentElement.style.overflow = "visible";
    }

    // Function to fix image consistency
    function fixImageSizes() {
        const images = document.querySelectorAll(".table td img");
        images.forEach((img) => {
            img.style.width = "150px";
            img.style.height = "100px";
            img.style.objectFit = "cover";
        });
    }

    // Monitor for changes to body overflow
    const bodyObserver = new MutationObserver(function (mutations) {
        mutations.forEach(function (mutation) {
            if (
                mutation.type === "attributes" &&
                mutation.attributeName === "style"
            ) {
                const bodyStyle = document.body.getAttribute("style");
                if (bodyStyle && bodyStyle.includes("overflow: hidden")) {
                    // Only allow overflow hidden for modals
                    if (!document.body.classList.contains("modal-open")) {
                        forceBodyScrollable();
                    }
                }
            }
        });
    });

    // Start observing body style changes
    bodyObserver.observe(document.body, {
        attributes: true,
        attributeFilter: ["style", "class"],
    });

    // Monitor for DataTables initialization
    const tableObserver = new MutationObserver(function (mutations) {
        mutations.forEach(function (mutation) {
            if (mutation.type === "childList") {
                mutation.addedNodes.forEach(function (node) {
                    if (node.nodeType === 1) {
                        // Element node
                        // Fix images in new table content
                        const newImages =
                            node.querySelectorAll &&
                            node.querySelectorAll(".table td img");
                        if (newImages && newImages.length > 0) {
                            fixImageSizes();
                        }
                    }
                });
            }
        });
    });

    // Start observing table changes
    const tableContainer =
        document.querySelector(".dataTables_wrapper") || document.body;
    tableObserver.observe(tableContainer, {
        childList: true,
        subtree: true,
    });

    // Initial fixes on page load
    document.addEventListener("DOMContentLoaded", function () {
        forceBodyScrollable();
        fixImageSizes();

        // Fix any existing DataTables
        setTimeout(function () {
            forceBodyScrollable();
            fixImageSizes();
        }, 1000);
    });

    // Fix on window load (after all resources)
    window.addEventListener("load", function () {
        forceBodyScrollable();
        fixImageSizes();
    });

    // Fix on AJAX complete (for DataTables updates)
    if (typeof jQuery !== "undefined") {
        jQuery(document).ajaxComplete(function () {
            setTimeout(function () {
                forceBodyScrollable();
                fixImageSizes();
            }, 100);
        });

        // Fix on DataTables draw event
        jQuery(document).on("draw.dt", function () {
            setTimeout(function () {
                forceBodyScrollable();
                fixImageSizes();
            }, 50);
        });
    }

    // Prevent Backpack error frame from breaking scroll
    const originalShowErrorFrame = window.showErrorFrame;
    if (typeof originalShowErrorFrame === "function") {
        window.showErrorFrame = function (html) {
            originalShowErrorFrame.call(this, html);
            // Restore scroll after error frame is shown
            setTimeout(forceBodyScrollable, 100);
        };
    }

    // Override any attempts to set overflow hidden on body
    const originalSetAttribute = Element.prototype.setAttribute;
    Element.prototype.setAttribute = function (name, value) {
        if (
            this === document.body &&
            name === "style" &&
            value.includes("overflow: hidden")
        ) {
            // Allow overflow hidden only for modals
            if (!this.classList.contains("modal-open")) {
                value = value.replace(
                    /overflow:\s*hidden/gi,
                    "overflow: visible"
                );
            }
        }
        return originalSetAttribute.call(this, name, value);
    };

    // Periodic check to ensure scroll is working
    setInterval(function () {
        if (!document.body.classList.contains("modal-open")) {
            forceBodyScrollable();
        }
    }, 2000);
})();
