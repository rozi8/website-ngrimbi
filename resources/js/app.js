document.addEventListener("DOMContentLoaded", () => {
    const menuButton = document.getElementById("mobile-menu-button");
    const mobileMenu = document.getElementById("mobile-menu");
    const profileButton = document.getElementById("mobile-profile-button");
    const profileMenu = document.getElementById("mobile-profile-menu");
    const serviceButton = document.getElementById("mobile-service-button");
    const serviceMenu = document.getElementById("mobile-service-menu");
    const informationButton = document.getElementById("mobile-information-button");
    const informationMenu = document.getElementById("mobile-information-menu");
    const dataButton = document.getElementById("mobile-data-button");
    const dataMenu = document.getElementById("mobile-data-menu");
    const tourismButton = document.getElementById("mobile-tourism-button");
    const tourismMenu = document.getElementById("mobile-tourism-menu");
    const ppidButton = document.getElementById("mobile-ppid-button");
    const ppidMenu = document.getElementById("mobile-ppid-menu");

    if (menuButton && mobileMenu) {
        menuButton.addEventListener("click", () => {
            const isOpen = !mobileMenu.classList.contains("hidden");

            mobileMenu.classList.toggle("hidden", isOpen);
            menuButton.setAttribute("aria-expanded", String(!isOpen));
        });

        mobileMenu.querySelectorAll("a").forEach((link) => {
            link.addEventListener("click", () => {
                mobileMenu.classList.add("hidden");
                menuButton.setAttribute("aria-expanded", "false");
            });
        });
    }

    const bindToggle = (button, menu) => {
        if (!button || !menu) {
            return;
        }

        button.addEventListener("click", () => {
            const isOpen = !menu.classList.contains("hidden");

            menu.classList.toggle("hidden", isOpen);
            button.setAttribute("aria-expanded", String(!isOpen));
        });
    };

    bindToggle(profileButton, profileMenu);
    bindToggle(serviceButton, serviceMenu);
    bindToggle(informationButton, informationMenu);
    bindToggle(dataButton, dataMenu);
    bindToggle(tourismButton, tourismMenu);
    bindToggle(ppidButton, ppidMenu);

    const umkmFilterButtons = document.querySelectorAll("[data-umkm-filter]");
    const umkmItems = document.querySelectorAll("[data-umkm-item]");
    const umkmEmpty = document.querySelector("[data-umkm-empty]");

    if (umkmFilterButtons.length && umkmItems.length) {
        umkmFilterButtons.forEach((button) => {
            button.addEventListener("click", () => {
                const selectedCategory = button.dataset.umkmFilter;
                let visibleCount = 0;

                umkmFilterButtons.forEach((item) => {
                    const isActive = item === button;

                    item.classList.toggle("bg-[#1a2586]", isActive);
                    item.classList.toggle("text-white", isActive);
                    item.classList.toggle("bg-slate-200", !isActive);
                    item.classList.toggle("text-slate-500", !isActive);
                    item.classList.toggle("hover:bg-slate-300", !isActive);
                    item.setAttribute("aria-pressed", String(isActive));
                });

                umkmItems.forEach((item) => {
                    const categories = item.dataset.category.split(" ");
                    const shouldShow = selectedCategory === "semua" || categories.includes(selectedCategory);

                    item.classList.toggle("hidden", !shouldShow);

                    if (shouldShow) {
                        visibleCount += 1;
                    }
                });

                if (umkmEmpty) {
                    umkmEmpty.classList.toggle("hidden", visibleCount > 0);
                }
            });
        });
    }

    const lawSearch = document.querySelector("[data-law-search]");
    const lawFilterButtons = document.querySelectorAll("[data-law-filter]");
    const lawItems = document.querySelectorAll("[data-law-item]");
    const lawEmpty = document.querySelector("[data-law-empty]");
    let activeLawFilter = "semua";

    const applyLawFilter = () => {
        if (!lawItems.length) {
            return;
        }

        const keyword = lawSearch ? lawSearch.value.trim().toLowerCase() : "";
        let visibleCount = 0;

        lawItems.forEach((item) => {
            const matchesCategory = activeLawFilter === "semua" || item.dataset.category === activeLawFilter;
            const matchesSearch = !keyword || item.dataset.title.includes(keyword);
            const shouldShow = matchesCategory && matchesSearch;

            item.classList.toggle("hidden", !shouldShow);

            if (shouldShow) {
                visibleCount += 1;
            }
        });

        if (lawEmpty) {
            lawEmpty.classList.toggle("hidden", visibleCount > 0);
        }
    };

    lawFilterButtons.forEach((button) => {
        button.addEventListener("click", () => {
            activeLawFilter = button.dataset.lawFilter;

            lawFilterButtons.forEach((item) => {
                const isActive = item === button;

                item.classList.toggle("bg-amber-400", isActive);
                item.classList.toggle("text-white", isActive);
                item.classList.toggle("bg-slate-200", !isActive);
                item.classList.toggle("text-[#1a2586]", !isActive);
                item.classList.toggle("hover:bg-slate-300", !isActive);
                item.setAttribute("aria-pressed", String(isActive));
            });

            applyLawFilter();
        });
    });

    if (lawSearch) {
        lawSearch.addEventListener("input", applyLawFilter);
    }
    const ppidSearch = document.querySelector("[data-ppid-search]");
    const ppidFilterButtons = document.querySelectorAll("[data-ppid-filter]");
    const ppidItems = document.querySelectorAll("[data-ppid-item]");
    const ppidEmpty = document.querySelector("[data-ppid-empty]");
    const ppidTitle = document.querySelector("[data-ppid-title]");
    const ppidLabels = {
        "berkala": "Informasi Berkala",
        "serta-merta": "Informasi Serta Merta",
        "setiap-saat": "Informasi Setiap Saat",
        "dikecualikan": "Informasi Dikecualikan",
    };
    let activePpidFilter = "berkala";

    const applyPpidFilter = () => {
        if (!ppidItems.length) {
            return;
        }

        const keyword = ppidSearch ? ppidSearch.value.trim().toLowerCase() : "";
        let visibleCount = 0;

        ppidItems.forEach((item) => {
            const matchesCategory = item.dataset.category === activePpidFilter;
            const matchesSearch = !keyword || item.dataset.title.includes(keyword);
            const shouldShow = matchesCategory && matchesSearch;

            item.classList.toggle("hidden", !shouldShow);

            if (shouldShow) {
                visibleCount += 1;
            }
        });

        if (ppidEmpty) {
            ppidEmpty.classList.toggle("hidden", visibleCount > 0);
        }

        if (ppidTitle) {
            ppidTitle.textContent = ppidLabels[activePpidFilter] || "Daftar Informasi Publik";
        }
    };

    ppidFilterButtons.forEach((button) => {
        button.addEventListener("click", () => {
            activePpidFilter = button.dataset.ppidFilter;

            ppidFilterButtons.forEach((item) => {
                const isActive = item === button;

                item.classList.toggle("bg-[#1a2586]", isActive);
                item.classList.toggle("text-white", isActive);
                item.classList.toggle("bg-slate-200", !isActive);
                item.classList.toggle("text-[#1a2586]", !isActive);
                item.classList.toggle("hover:bg-slate-300", !isActive);
                item.setAttribute("aria-pressed", String(isActive));
            });

            applyPpidFilter();
        });
    });

    if (ppidSearch) {
        ppidSearch.addEventListener("input", applyPpidFilter);
        applyPpidFilter();
    }
});
