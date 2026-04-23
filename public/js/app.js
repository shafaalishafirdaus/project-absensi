// ===================================
// Navigation Toggle (Mobile)
// ===================================
document.addEventListener('DOMContentLoaded', function() {
    const hamburger = document.querySelector('.hamburger');
    const navMenu = document.querySelector('.nav-menu');
    
    if (hamburger && navMenu) {
        hamburger.addEventListener('click', function() {
            navMenu.classList.toggle('active');
            hamburger.classList.toggle('active');
        });
    }

    // ===================================
    // Sidebar Toggle
    // ===================================
    const sidebarToggle = document.getElementById('sidebarToggle');
    const sidebar = document.getElementById('sidebar');
    
    if (sidebarToggle && sidebar) {
        sidebarToggle.addEventListener('click', function() {
            sidebar.classList.toggle('active');
        });
    }

    // ===================================
    // Smooth Scroll for Anchor Links
    // ===================================
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });

    // ===================================
    // Animated Counter
    // ===================================
    function animateCounter(element, target, duration = 2000) {
        let start = 0;
        const increment = target / (duration / 16);
        
        function updateCounter() {
            start += increment;
            if (start < target) {
                element.textContent = Math.floor(start).toLocaleString();
                requestAnimationFrame(updateCounter);
            } else {
                element.textContent = target.toLocaleString();
            }
        }
        
        updateCounter();
    }

    // Intersection Observer for Counter Animation
    const counters = document.querySelectorAll('[data-count]');
    const observerOptions = {
        threshold: 0.5
    };

    const counterObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const target = parseInt(entry.target.dataset.count);
                animateCounter(entry.target, target);
                counterObserver.unobserve(entry.target);
            }
        });
    }, observerOptions);

    counters.forEach(counter => {
        counterObserver.observe(counter);
    });

    // ===================================
    // Data Tabs
    // ===================================
    const dataTabs = document.querySelectorAll('.data-tab');
    
    dataTabs.forEach(tab => {
        tab.addEventListener('click', function() {
            // Remove active class from all tabs
            dataTabs.forEach(t => t.classList.remove('active'));
            // Add active class to clicked tab
            this.classList.add('active');
            
            // Hide all content
            document.querySelectorAll('.data-content').forEach(content => {
                content.classList.remove('active');
            });
            
            // Show target content
            const target = this.dataset.target;
            const targetContent = document.getElementById(target);
            if (targetContent) {
                targetContent.classList.add('active');
            }
        });
    });

    // ===================================
    // Sidebar Navigation Active State
    // ===================================
    const sidebarLinks = document.querySelectorAll('.sidebar-nav li a');
    
    sidebarLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            // Remove active class from all
            document.querySelectorAll('.sidebar-nav li').forEach(li => {
                li.classList.remove('active');
            });
            // Add to parent li
            this.parentElement.classList.add('active');
        });
    });

    // ===================================
    // Form Validation
    // ===================================
    const forms = document.querySelectorAll('form');
    
    forms.forEach(form => {
        form.addEventListener('submit', function(e) {
            const requiredFields = form.querySelectorAll('[required]');
            let isValid = true;
            
            requiredFields.forEach(field => {
                if (!field.value.trim()) {
                    isValid = false;
                    field.style.borderColor = '#ef4444';
                } else {
                    field.style.borderColor = '';
                }
            });
            
            if (!isValid) {
                e.preventDefault();
                showNotification('Mohon lengkapi semua field yang diperlukan', 'error');
            }
        });
    });

    // ===================================
    // Notification System
    // ===================================
    window.showNotification = function(message, type = 'success') {
        const notification = document.createElement('div');
        notification.className = `notification notification-${type}`;
        notification.innerHTML = `
            <i class="fas fa-${type === 'success' ? 'check-circle' : 'exclamation-circle'}"></i>
            <span>${message}</span>
        `;
        
        // Styles
        notification.style.cssText = `
            position: fixed;
            top: 20px;
            right: 20px;
            padding: 16px 24px;
            background: ${type === 'success' ? '#10b981' : '#ef4444'};
            color: white;
            border-radius: 8px;
            display: flex;
            align-items: center;
            gap: 12px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.15);
            z-index: 9999;
            animation: slideIn 0.3s ease;
        `;
        
       if (document.body) {
    document.body.appendChild(notification);
}
        
        setTimeout(() => {
            notification.style.animation = 'slideOut 0.3s ease';
            setTimeout(() => notification.remove(), 300);
        }, 3000);
    };

    // ===================================
    // Search Functionality
    // ===================================
    const searchInputs = document.querySelectorAll('.search-filter input, .search-bar input');
    
    searchInputs.forEach(input => {
        input.addEventListener('input', function() {
            const searchTerm = this.value.toLowerCase();
            const table = this.closest('.data-content, .table-card')?.querySelector('table');
            
            if (table) {
                const rows = table.querySelectorAll('tbody tr');
                
                rows.forEach(row => {
                    const text = row.textContent.toLowerCase();
                    row.style.display = text.includes(searchTerm) ? '' : 'none';
                });
            }
        });
    });

    // ===================================
    // Checkbox Select All
    // ===================================
    const selectAllCheckbox = document.querySelector('thead input[type="checkbox"]');
    
    if (selectAllCheckbox) {
        selectAllCheckbox.addEventListener('change', function() {
            const checkboxes = document.querySelectorAll('tbody input[type="checkbox"]');
            checkboxes.forEach(cb => cb.checked = this.checked);
        });
    }

    // ===================================
    // Delete Confirmation
    // ===================================
    document.querySelectorAll('.btn-icon.delete').forEach(btn => {
        btn.addEventListener('click', function(e) {
            e.preventDefault();
            if (confirm('Apakah Anda yakin ingin menghapus data ini?')) {
                // Delete logic here
                const row = this.closest('tr');
                if (row) {
                    row.style.animation = 'fadeOut 0.3s ease';
                    setTimeout(() => row.remove(), 300);
                    showNotification('Data berhasil dihapus', 'success');
                }
            }
        });
    });

    // ===================================
    // Approval Actions
    // ===================================
    document.querySelectorAll('.approval-actions .approve').forEach(btn => {
        btn.addEventListener('click', function() {
            const item = this.closest('.approval-item');
            if (item) {
                item.style.background = '#ecfdf5';
                showNotification('Izin disetujui', 'success');
                setTimeout(() => {
                    item.style.animation = 'fadeOut 0.3s ease';
                    setTimeout(() => item.remove(), 300);
                }, 1000);
            }
        });
    });

    document.querySelectorAll('.approval-actions .reject').forEach(btn => {
        btn.addEventListener('click', function() {
            const item = this.closest('.approval-item');
            if (item) {
                item.style.background = '#fef2f2';
                showNotification('Izin ditolak', 'error');
                setTimeout(() => {
                    item.style.animation = 'fadeOut 0.3s ease';
                    setTimeout(() => item.remove(), 300);
                }, 1000);
            }
        });
    });

    // ===================================
    // Real-time Clock (for headers)
    // ===================================
    function updateClock() {
        const now = new Date();
        const options = { 
            weekday: 'long', 
            year: 'numeric', 
            month: 'long', 
            day: 'numeric',
            hour: '2-digit',
            minute: '2-digit'
        };
        const timeString = now.toLocaleDateString('id-ID', options);
        
        const clockElement = document.querySelector('.current-time');
        if (clockElement) {
            clockElement.textContent = timeString;
        }
    }
    
    updateClock();
    setInterval(updateClock, 1000);

    // ===================================
    // Circular Progress Animation
    // ===================================
    document.querySelectorAll('.circular-progress').forEach(progress => {
        const value = progress.dataset.progress;
        const circle = progress.querySelector('circle:last-child');
        if (circle) {
            circle.style.setProperty('--progress', value);
        }
    });

    // ===================================
    // Filter Buttons
    // ===================================
    document.querySelectorAll('.filter-btn').forEach(btn => {
        btn.addEventListener('click', function() {
            this.parentElement.querySelectorAll('.filter-btn').forEach(b => {
                b.classList.remove('active');
            });
            this.classList.add('active');
        });
    });

    // ===================================
    // Auto-hide sidebar on mobile when clicking outside
    // ===================================
    document.addEventListener('click', function(e) {
        if (window.innerWidth <= 992) {
            const sidebar = document.getElementById('sidebar');
            const sidebarToggle = document.getElementById('sidebarToggle');
            
            if (sidebar && sidebar.classList.contains('active')) {
                if (!sidebar.contains(e.target) && !sidebarToggle.contains(e.target)) {
                    sidebar.classList.remove('active');
                }
            }
        }
    });

    // ===================================
    // Add CSS for animations
    // ===================================
    const style = document.createElement('style');
    style.textContent = `
        @keyframes slideIn {
            from {
                transform: translateX(100%);
                opacity: 0;
            }
            to {
                transform: translateX(0);
                opacity: 1;
            }
        }
        
        @keyframes slideOut {
            from {
                transform: translateX(0);
                opacity: 1;
            }
            to {
                transform: translateX(100%);
                opacity: 0;
            }
        }
        
        @keyframes fadeOut {
            from {
                opacity: 1;
            }
            to {
                opacity: 0;
            }
        }
    `;
    document.head.appendChild(style);
});

// ===================================
// Modal Functions (Global)
// ===================================
function openModal(modalId) {
    const modal = document.getElementById(modalId);
    if (modal) {
        modal.classList.add('active');
        document.body.style.overflow = 'hidden';
    }
}

function closeModal(modalId) {
    const modal = document.getElementById(modalId);
    if (modal) {
        modal.classList.remove('active');
        document.body.style.overflow = '';
    }
}

// Close modal on backdrop click
document.addEventListener('click', function(e) {
    if (e.target.classList.contains('modal')) {
        e.target.classList.remove('active');
        document.body.style.overflow = '';
    }
});

// Close modal on Escape key
document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape') {
        document.querySelectorAll('.modal.active').forEach(modal => {
            modal.classList.remove('active');
        });
        document.body.style.overflow = '';
    }
});

// ===================================
// Export Functions
// ===================================
function exportToExcel() {
    showNotification('Mengexport data ke Excel...', 'success');
    // Implement actual export logic
}

function exportToPDF() {
    showNotification('Mengexport data ke PDF...', 'success');
    // Implement actual export logic
}

// ===================================
// QR Code Scanner Simulation
// ===================================
function startQRScanner() {
    const scannerLine = document.querySelector('.scanner-line');
    if (scannerLine) {
        scannerLine.style.animationPlayState = 'running';
    }
    
    // Simulate successful scan after 3 seconds
    setTimeout(() => {
        showNotification('Absensi berhasil dicatat!', 'success');
        closeModal('scanModal');
    }, 3000);
}
<button onclick="showNotification('Tes berhasil!', 'success')">
    Test Notif
</button>
// ===================================
// Print Function
// ===================================
function printReport() {
    window.print();
}
