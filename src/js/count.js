document.addEventListener("DOMContentLoaded", () => {
    const counters = [
      { id: "count1", target: 11 },
      { id: "count2", target: 42 },
      { id: "count3", target: 18 },
      { id: "count4", target: 189 },
      { id: "count5", target: 120 },
    ];

    const startCounting = (counter) => {
      const element = document.getElementById(counter.id);
      let current = 0;
      const step = Math.ceil(counter.target / 100);

      const interval = setInterval(() => {
        if (current < counter.target) {
          current += step;
          element.textContent = `${current} ${counter.id === 'count1' ? 'Mil+' : ''}`;
        } else {
          clearInterval(interval);
          element.textContent = `${counter.target} ${counter.id === 'count1' ? 'Mil+' : ''}`;
        }
      }, 10);
    };

    const observer = new IntersectionObserver((entries, observer) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          const counterId = entry.target.id;
          const counter = counters.find(c => c.id === counterId);
          if (counter) {
            startCounting(counter);
          }
          observer.unobserve(entry.target);
        }
      });
    }, { threshold: 0.5 });

    counters.forEach(counter => {
      const element = document.getElementById(counter.id);
      observer.observe(element);
    });
  });