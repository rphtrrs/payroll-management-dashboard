<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Payroll Management System Dashboard</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@3.3.2/dist/tailwind.min.css" rel="stylesheet" />
  <style>
    /* Custom scrollbar for sidebar */
    ::-webkit-scrollbar {
      width: 8px;
    }
    ::-webkit-scrollbar-thumb {
      background-color: #4b5563; /* Gray-600 */
      border-radius: 4px;
    }
  </style>
</head>
<body class="bg-gray-100 text-gray-900 font-sans flex h-screen overflow-hidden">

  <!-- Sidebar -->
  <aside class="bg-gray-900 text-gray-300 w-64 flex flex-col">
    <div class="flex items-center space-x-3 px-6 py-4 border-b border-gray-700">
      <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
        <path d="M3 12l2-2 4 4 8-8 4 4v6H3z" />
      </svg>
      <span class="text-white font-bold text-lg">Payroll Management System</span>
    </div>
    <nav class="flex-1 overflow-y-auto px-4 py-6 space-y-2">
      <a href="#" class="flex items-center space-x-3 px-3 py-2 rounded-md bg-gray-800 text-white">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
          <rect x="3" y="4" width="18" height="16" rx="2" ry="2" />
          <path d="M3 10h18" />
        </svg>
        <span>Dashboard</span>
      </a>
      <a href="#" class="flex items-center space-x-3 px-3 py-2 rounded-md hover:bg-gray-800 hover:text-white">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
          <line x1="12" y1="1" x2="12" y2="23" />
          <path d="M17 5H9a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V7a2 2 0 0 0-2-2z" />
        </svg>
        <span>Attendance</span>
      </a>
      <a href="#" class="flex items-center space-x-3 px-3 py-2 rounded-md hover:bg-gray-800 hover:text-white">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
          <circle cx="12" cy="12" r="10" />
          <path d="M12 6v6l4 2" />
        </svg>
        <span>Payroll</span>
      </a>
      <a href="#" class="flex items-center space-x-3 px-3 py-2 rounded-md hover:bg-gray-800 hover:text-white">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
          <circle cx="12" cy="7" r="4" />
          <path d="M5.5 21a6.5 6.5 0 0 1 13 0" />
        </svg>
        <span>Employees</span>
      </a>
      <a href="#" class="flex items-center space-x-3 px-3 py-2 rounded-md hover:bg-gray-800 hover:text-white">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
          <path d="M3 7h18M3 12h18M3 17h18" />
        </svg>
        <span>Department List</span>
      </a>
      <a href="#" class="flex items-center space-x-3 px-3 py-2 rounded-md hover:bg-gray-800 hover:text-white">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
          <path d="M12 2l9 21H3L12 2z" />
        </svg>
        <span>Position List</span>
      </a>
      <a href="#" class="flex items-center space-x-3 px-3 py-2 rounded-md hover:bg-gray-800 hover:text-white">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
          <rect x="3" y="4" width="18" height="16" rx="2" ry="2" />
          <path d="M3 10h18" />
        </svg>
        <span>Deduction List</span>
      </a>
      <a href="#" class="flex items-center space-x-3 px-3 py-2 rounded-md hover:bg-gray-800 hover:text-white">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
          <circle cx="12" cy="12" r="10" />
          <path d="M12 16v-4" />
          <path d="M12 12h.01" />
        </svg>
        <span>Users</span>
      </a>
    </nav>
    <div class="px-6 py-4 text-xs text-gray-500 border-t border-gray-700">
      WAYCON BUILDERS CONSTRUCTION & SUPPLY CORP. 2025
    </div>
  </aside>

  <!-- Main content -->
  <div class="flex-1 flex flex-col">
    <!-- Top bar -->
    <header class="flex items-center justify-between bg-white shadow px-6 py-4">
      <div class="text-gray-700 font-semibold">Welcome Back, Juan Dela Cruz!</div>
      <div class="flex items-center space-x-4">
        <input type="text" placeholder="Search" class="border border-gray-300 rounded px-3 py-1 focus:outline-none focus:ring-2 focus:ring-green-600" />
        <button aria-label="Notifications" class="relative">
          <svg class="w-6 h-6 text-gray-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
            <path d="M18 8a6 6 0 0 0-12 0v5H4l4 4h8l4-4h-2z" />
          </svg>
          <span class="absolute top-0 right-0 block w-2 h-2 bg-red-600 rounded-full"></span>
        </button>
        <button aria-label="User menu" class="relative">
          <svg class="w-6 h-6 text-gray-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
            <circle cx="12" cy="7" r="4" />
            <path d="M5.5 21a6.5 6.5 0 0 1 13 0" />
          </svg>
        </button>
      </div>
    </header>

    <!-- Dashboard content -->
    <main class="flex-1 overflow-auto p-6 bg-gray-50">
      <h1 class="text-2xl font-bold mb-6">Dashboard</h1>

      <!-- Calendar container -->
      <div id="calendar-container" class="bg-white rounded shadow p-4 max-w-md mx-auto"></div>
    </main>
  </div>

  <script>
    // Simple calendar implementation with month, week, day views and event CRUD

    const calendarContainer = document.getElementById('calendar-container');

    // State
    let currentDate = new Date();
    let currentView = 'month'; // 'month', 'week', 'day'
    let events = JSON.parse(localStorage.getItem('events') || '[]');

    // Utility functions
    function formatDate(date) {
      return date.toISOString().split('T')[0];
    }

    function saveEvents() {
      localStorage.setItem('events', JSON.stringify(events));
    }

    // Render functions
    function renderCalendar() {
      calendarContainer.innerHTML = '';

      // View selector
      const viewSelector = document.createElement('div');
      viewSelector.className = 'flex justify-center space-x-4 mb-4';
      ['month', 'week', 'day'].forEach(view => {
        const btn = document.createElement('button');
        btn.textContent = view.charAt(0).toUpperCase() + view.slice(1);
        btn.className = 'px-3 py-1 rounded ' + (currentView === view ? 'bg-green-600 text-white' : 'bg-gray-200');
        btn.onclick = () => {
          currentView = view;
          renderCalendar();
        };
        viewSelector.appendChild(btn);
      });
      calendarContainer.appendChild(viewSelector);

      if (currentView === 'month') {
        renderMonthView();
      } else if (currentView === 'week') {
        renderWeekView();
      } else {
        renderDayView();
      }
    }

    function renderMonthView() {
      const year = currentDate.getFullYear();
      const month = currentDate.getMonth();

      const firstDay = new Date(year, month, 1);
      const lastDay = new Date(year, month + 1, 0);
      const startDay = firstDay.getDay(); // 0 (Sun) - 6 (Sat)
      const daysInMonth = lastDay.getDate();

      const grid = document.createElement('div');
      grid.className = 'grid grid-cols-7 gap-1 text-center';

      // Weekday headers
      ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'].forEach(day => {
        const header = document.createElement('div');
        header.className = 'font-semibold text-gray-700';
        header.textContent = day;
        grid.appendChild(header);
      });

      // Empty cells before first day
      for (let i = 0; i < startDay; i++) {
        const emptyCell = document.createElement('div');
        emptyCell.className = 'p-2';
        grid.appendChild(emptyCell);
      }

      // Days
      for (let day = 1; day <= daysInMonth; day++) {
        const dateStr = formatDate(new Date(year, month, day));
        const dayCell = document.createElement('div');
        dayCell.className = 'p-2 border rounded cursor-pointer hover:bg-green-100 relative';

        // Events for this day
        const dayEvents = events.filter(e => e.date === dateStr);
        dayEvents.forEach(ev => {
          const evDiv = document.createElement('div');
          evDiv.className = 'bg-green-600 text-white text-xs rounded px-1 truncate';
          evDiv.textContent = ev.title;
          evDiv.title = ev.title;
          evDiv.onclick = (e) => {
            e.stopPropagation();
            openEventModal(ev);
          };
          dayCell.appendChild(evDiv);
        });

        dayCell.textContent = day;
        dayCell.onclick = () => openEventModal({ date: dateStr });
        grid.appendChild(dayCell);
      }

      calendarContainer.appendChild(grid);
    }

    function renderWeekView() {
      const year = currentDate.getFullYear();
      const month = currentDate.getMonth();
      const day = currentDate.getDate();

      // Find Sunday of the current week
      const sunday = new Date(year, month, day - currentDate.getDay());

      const grid = document.createElement('div');
      grid.className = 'grid grid-cols-8 gap-1 text-center';

      // Time column header
      const timeHeader = document.createElement('div');
      timeHeader.className = 'font-semibold text-gray-700';
      timeHeader.textContent = '';
      grid.appendChild(timeHeader);

      // Weekday headers
      ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'].forEach((dayName, i) => {
        const header = document.createElement('div');
        header.className = 'font-semibold text-gray-700';
        header.textContent = dayName;
        grid.appendChild(header);
      });

      // Hours rows
      for (let hour = 0; hour < 24; hour++) {
        // Time label
        const timeLabel = document.createElement('div');
        timeLabel.className = 'text-xs text-gray-600';
        timeLabel.textContent = hour + ':00';
        grid.appendChild(timeLabel);

        // Day columns
        for (let d = 0; d < 7; d++) {
          const cell = document.createElement('div');
          cell.className = 'border h-10 cursor-pointer hover:bg-green-100 relative';
          const cellDate = new Date(sunday.getFullYear(), sunday.getMonth(), sunday.getDate() + d);
          const dateStr = formatDate(cellDate);

          // Events for this hour and day
          const hourEvents = events.filter(e => e.date === dateStr && e.hour === hour);
          hourEvents.forEach(ev => {
            const evDiv = document.createElement('div');
            evDiv.className = 'bg-green-600 text-white text-xs rounded px-1 truncate absolute top-0 left-0 right-0';
            evDiv.textContent = ev.title;
            evDiv.title = ev.title;
            evDiv.onclick = (e) => {
              e.stopPropagation();
              openEventModal(ev);
            };
            cell.appendChild(evDiv);
          });

          cell.onclick = () => openEventModal({ date: dateStr, hour });
          grid.appendChild(cell);
        }
      }

      calendarContainer.appendChild(grid);
    }

    function renderDayView() {
      const year = currentDate.getFullYear();
      const month = currentDate.getMonth();
      const day = currentDate.getDate();

      const dayLabel = document.createElement('h2');
      dayLabel.className = 'text-lg font-semibold mb-2';
      dayLabel.textContent = currentDate.toDateString();
      calendarContainer.appendChild(dayLabel);

      const grid = document.createElement('div');
      grid.className = 'grid grid-cols-1 gap-1 text-center';

      // Hours rows
      for (let hour = 0; hour < 24; hour++) {
        const cell = document.createElement('div');
        cell.className = 'border h-10 cursor-pointer hover:bg-green-100 relative';

        // Events for this hour
        const hourEvents = events.filter(e => e.date === formatDate(currentDate) && e.hour === hour);
        hourEvents.forEach(ev => {
          const evDiv = document.createElement('div');
          evDiv.className = 'bg-green-600 text-white text-xs rounded px-1 truncate absolute top-0 left-0 right-0';
          evDiv.textContent = ev.title;
          evDiv.title = ev.title;
          evDiv.onclick = (e) => {
            e.stopPropagation();
            openEventModal(ev);
          };
          cell.appendChild(evDiv);
        });

        cell.onclick = () => openEventModal({ date: formatDate(currentDate), hour });
        grid.appendChild(cell);
      }

      calendarContainer.appendChild(grid);
    }

    // Event modal
    function openEventModal(event = {}) {
      // Create modal elements
      const modalOverlay = document.createElement('div');
      modalOverlay.className = 'fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50';

      const modal = document.createElement('div');
      modal.className = 'bg-white rounded p-6 w-80 shadow-lg relative';

      const title = document.createElement('h3');
      title.className = 'text-lg font-semibold mb-4';
      title.textContent = event.id ? 'Edit Event' : 'Add Event';

      const form = document.createElement('form');

      // Title input
      const titleLabel = document.createElement('label');
      titleLabel.textContent = 'Title';
      titleLabel.className = 'block text-sm font-medium mb-1';
      const titleInput = document.createElement('input');
      titleInput.type = 'text';
      titleInput.value = event.title || '';
      titleInput.required = true;
      titleInput.className = 'w-full border border-gray-300 rounded px-2 py-1 mb-3 focus:outline-none focus:ring-2 focus:ring-green-600';

      // Date input
      const dateLabel = document.createElement('label');
      dateLabel.textContent = 'Date';
      dateLabel.className = 'block text-sm font-medium mb-1';
      const dateInput = document.createElement('input');
      dateInput.type = 'date';
      dateInput.value = event.date || '';
      dateInput.required = true;
      dateInput.className = 'w-full border border-gray-300 rounded px-2 py-1 mb-3 focus:outline-none focus:ring-2 focus:ring-green-600';

      // Hour input (only for week/day views)
      const hourLabel = document.createElement('label');
      hourLabel.textContent = 'Hour (0-23)';
      hourLabel.className = 'block text-sm font-medium mb-1';
      const hourInput = document.createElement('input');
      hourInput.type = 'number';
      hourInput.min = 0;
      hourInput.max = 23;
      hourInput.value = event.hour !== undefined ? event.hour : '';
      hourInput.className = 'w-full border border-gray-300 rounded px-2 py-1 mb-3 focus:outline-none focus:ring-2 focus:ring-green-600';

      // Buttons
      const btnContainer = document.createElement('div');
      btnContainer.className = 'flex justify-end space-x-2';

      const saveBtn = document.createElement('button');
      saveBtn.type = 'submit';
      saveBtn.textContent = 'Save';
      saveBtn.className = 'bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700';

      const cancelBtn = document.createElement('button');
      cancelBtn.type = 'button';
      cancelBtn.textContent = 'Cancel';
      cancelBtn.className = 'px-4 py-2 rounded border border-gray-300 hover:bg-gray-100';

      const deleteBtn = document.createElement('button');
      deleteBtn.type = 'button';
      deleteBtn.textContent = 'Delete';
      deleteBtn.className = 'px-4 py-2 rounded border border-red-500 text-red-500 hover:bg-red-100';

      btnContainer.appendChild(saveBtn);
      btnContainer.appendChild(cancelBtn);
      if (event.id !== undefined) {
        btnContainer.appendChild(deleteBtn);
      }

      form.appendChild(titleLabel);
      form.appendChild(titleInput);
      form.appendChild(dateLabel);
      form.appendChild(dateInput);
      form.appendChild(hourLabel);
      form.appendChild(hourInput);
      form.appendChild(btnContainer);

      modal.appendChild(title);
      modal.appendChild(form);
      modalOverlay.appendChild(modal);
      document.body.appendChild(modalOverlay);

      // Event handlers
      cancelBtn.onclick = () => {
        document.body.removeChild(modalOverlay);
      };

      deleteBtn.onclick = () => {
        events = events.filter(e => e.id !== event.id);
        saveEvents();
        renderCalendar();
        document.body.removeChild(modalOverlay);
      };

      form.onsubmit = (e) => {
        e.preventDefault();
        const newEvent = {
          id: event.id !== undefined ? event.id : Date.now(),
          title: titleInput.value.trim(),
          date: dateInput.value,
          hour: hourInput.value === '' ? undefined : parseInt(hourInput.value, 10),
        };
        if (event.id !== undefined) {
          // Edit existing
          events = events.map(ev => (ev.id === event.id ? newEvent : ev));
        } else {
          // Add new
          events.push(newEvent);
        }
        saveEvents();
        renderCalendar();
        document.body.removeChild(modalOverlay);
      };
    }

    // Initial render
    renderCalendar();
  </script>
</body>
</html>
