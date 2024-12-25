<div class="counter-section_" id="counterSection">
      <div class="counter-item_">
        <h2 class="counter_" data-target="150">0</h2>
        <p_>Projects Completed</p_>
      </div>
      <div class="counter-item_">
        <h2 class="counter_" data-target="320">0</h2>
        <p_>Happy Clients</p_>
      </div>
      <div class="counter-item_">
        <h2 class="counter_" data-target="98.5">0</h2>
        <p_>Satisfaction Rate</p_>
      </div>
    </div>

    <script>
      const counterSection = document.getElementById("counterSection");
const counters = document.querySelectorAll(".counter_");

const animateCounters = () => {
    counters.forEach((counter) => {
        counter.textContent = "0";

        const updateCounter = () => {
            const target = +counter.getAttribute("data-target");
            const current = +counter.textContent;
            const increment = target / 100;

            if (current < target) {
                counter.textContent = Math.min(
                    current + increment,
                    target
                ).toFixed(target % 1 !== 0 ? 1 : 0);
                setTimeout(updateCounter, 20);
            }
        };

        updateCounter();
    });
};

const observer = new IntersectionObserver(
    (entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                counterSection.classList.add("visible_");
                animateCounters();
                observer.unobserve(counterSection); // Stop observing after animation
            }
        });
    },
    { threshold: 0.5 } // Trigger when 50% of the section is visible
);

observer.observe(counterSection);
    </script>