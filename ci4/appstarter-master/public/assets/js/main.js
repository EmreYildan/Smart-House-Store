const menuToggle = document.querySelector("[data-menu-toggle]");
const mainNav = document.querySelector("[data-main-nav]");

if (menuToggle && mainNav) {
	menuToggle.addEventListener("click", () => {
		const isOpen = mainNav.classList.toggle("open");
		menuToggle.setAttribute("aria-expanded", String(isOpen));
	});
}

const revealItems = document.querySelectorAll(".reveal");
if ("IntersectionObserver" in window && revealItems.length > 0) {
	const observer = new IntersectionObserver(
		(entries, currentObserver) => {
			entries.forEach((entry) => {
				if (entry.isIntersecting) {
					entry.target.classList.add("visible");
					currentObserver.unobserve(entry.target);
				}
			});
		},
		{ threshold: 0.15 }
	);

	revealItems.forEach((item) => observer.observe(item));
} else {
	revealItems.forEach((item) => item.classList.add("visible"));
}

const qtyInput = document.querySelector("[data-qty-input]");
const qtyDown = document.querySelector("[data-qty-down]");
const qtyUp = document.querySelector("[data-qty-up]");

if (qtyInput && qtyDown && qtyUp) {
	qtyDown.addEventListener("click", () => {
		const nextVal = Math.max(1, Number(qtyInput.value) - 1);
		qtyInput.value = String(nextVal);
	});

	qtyUp.addEventListener("click", () => {
		const nextVal = Math.max(1, Number(qtyInput.value) + 1);
		qtyInput.value = String(nextVal);
	});
}

const chips = document.querySelectorAll(".chip");
chips.forEach((chip) => {
	chip.addEventListener("click", () => {
		chips.forEach((item) => item.classList.remove("active"));
		chip.classList.add("active");
	});
});