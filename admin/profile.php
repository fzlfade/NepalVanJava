<?php
session_start();

// Proteksi akses
if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'admin') {
    header("Location: ../auth/login.php");
    exit();
}

require '../config/koneksi.php';

// Ambil data slider dari database
try {
    $stmt = $pdo->query("SELECT * FROM sliders ORDER BY id_slider DESC");
    $sliders = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    $_SESSION['error'] = "Gagal mengambil data slider: " . $e->getMessage();
    $sliders = [];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Kelola Slider Utama - Admin NepalVanJava</title>

    <!-- Favicons -->
    <link href="../assets/img/favicon.png" rel="icon" />
    <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon" />

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">

    <!-- Bootstrap CSS -->
    <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- FullCalendar CSS -->
    <link href='https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/main.min.css' rel='stylesheet' />

    <!-- Custom CSS -->
    <link href="../assets/css/admin.css?v=1.0" rel="stylesheet">

    <style>
        .slider-card {
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: all 0.3s;
            margin-bottom: 20px;
        }

        .slider-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 15px rgba(0, 0, 0, 0.1);
        }

        .slider-img {
            height: 300px;
            object-fit: cover;
            width: 100%;
        }

        .slider-body {
            padding: 20px;
            background: white;
        }

        .action-buttons {
            position: absolute;
            top: 15px;
            right: 15px;
        }

        .btn-action {
            width: 35px;
            height: 35px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            margin-left: 5px;
        }

        /* Kalender Styles */
        #calendar {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .fc-header-toolbar {
            margin-bottom: 1em;
        }

        .fc-daygrid-day-number {
            font-size: 0.8em;
            padding: 2px;
            color: #333;
        }

        .fc-daygrid-day-frame {
            min-height: 40px;
        }

        .fc-daygrid-day-top {
            justify-content: center;
        }

        .fc-event {
            cursor: pointer;
            padding: 1px 3px;
            border-radius: 2px;
            margin-bottom: 1px;
            font-size: 0.75em;
            border: none;
        }

        .fc-daygrid-event {
            white-space: normal !important;
            word-wrap: break-word;
        }

        /* Event Details */
        #eventDetails {
            min-height: 500px;
            max-height: 600px;
            overflow-y: auto;
            background-color: #f8f9fa;
            border-radius: 8px;
        }

        .event-dot {
            display: inline-block;
            width: 10px;
            height: 10px;
            border-radius: 50%;
            margin-right: 5px;
        }

        .event-item {
            transition: all 0.2s;
            background-color: white;
            border-radius: 5px;
            padding: 10px;
            margin-bottom: 10px;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
        }

        .event-item:hover {
            background-color: #f1f1f1;
        }
    </style>
</head>

<body>
    <!-- Include Sidebar -->
    <?php include 'includes/sidebar.php'; ?>

    <!-- Main Content -->
    <div class="main-content">
        <!-- Topbar -->
        <div class="topbar">
            <div class="topbar-menu">
                <button class="sidebar-toggle" id="sidebarToggle">
                    <i class="bi bi-list"></i>
                </button>

                <div class="user-menu">
                    <button class="user-btn" data-bs-toggle="modal" data-bs-target="#userMenuModal">
                        <i class="bi bi-person-circle me-2"></i>
                        <?php echo htmlspecialchars($_SESSION['username']); ?>
                    </button>
                </div>
            </div>
        </div>

        <!-- Page Content -->
        <div class="container-fluid py-4">
            <!-- Notifikasi -->
            <?php if (isset($_SESSION['success'])): ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <?= $_SESSION['success'] ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                <?php unset($_SESSION['success']); ?>
            <?php endif; ?>

            <?php if (isset($_SESSION['error'])): ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <?= $_SESSION['error'] ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                <?php unset($_SESSION['error']); ?>
            <?php endif; ?>

            <div class="d-flex justify-content-between align-items-center mb-4">
                <h2 class="mb-0">Kelola Slider Utama</h2>
                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambahSliderModal">
                    <i class="bi bi-plus-circle"></i> Tambah Slider
                </button>
            </div>

            <!-- Slider List -->
            <div class="row">
                <?php if (empty($sliders)): ?>
                    <div class="col-12">
                        <div class="alert alert-info">
                            Belum ada slider yang ditambahkan.
                        </div>
                    </div>
                <?php else: ?>
                    <?php foreach ($sliders as $slider): ?>
                        <div class="col-md-6 col-lg-4">
                            <div class="slider-card position-relative">
                                <img src="../uploads/sliders/<?= htmlspecialchars($slider['gambar']) ?>"
                                    alt="<?= htmlspecialchars($slider['judul']) ?>" class="slider-img">

                                <div class="action-buttons">
                                    <button class="btn btn-success btn-action rounded-circle" data-bs-toggle="modal"
                                        data-bs-target="#editSliderModal" data-id="<?= $slider['id_slider'] ?>"
                                        data-judul="<?= htmlspecialchars($slider['judul']) ?>"
                                        data-subjudul="<?= htmlspecialchars($slider['subjudul']) ?>">
                                        <i class="bi bi-pencil"></i>
                                    </button>
                                    <button class="btn btn-danger btn-action rounded-circle" data-bs-toggle="modal"
                                        data-bs-target="#hapusSliderModal" data-id="<?= $slider['id_slider'] ?>">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </div>

                                <div class="slider-body">
                                    <h4><?= htmlspecialchars($slider['judul']) ?></h4>
                                    <p class="text-muted"><?= htmlspecialchars($slider['subjudul']) ?></p>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>

            <!-- Calendar Section -->
            <div class="row mt-5">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h4>Kalender Event</h4>
                            <button class="btn btn-primary" id="addEventBtn">
                                <i class="bi bi-plus-circle"></i> Tambah Event
                            </button>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-8">
                                    <!-- Calendar -->
                                    <div id="calendar" class="bg-white p-3 rounded shadow"></div>
                                </div>
                                <div class="col-md-4">
                                    <!-- Detail Event -->
                                    <div id="eventDetails" class="p-3 border rounded">
                                        <h5 class="text-center mb-3" id="monthYearTitle">Daftar Event Agustus 2025</h5>
                                        <div id="eventsList">
                                            <p class="text-muted text-center">Memuat event...</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer -->
        <footer class="footer mt-auto py-3 bg-light">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 text-center">
                        <p class="mb-0 text-muted">&copy; <?php echo date('Y'); ?> Nepal Van Java - Admin Panel</p>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <!-- Modal Tambah Slider -->
    <div class="modal fade" id="tambahSliderModal" tabindex="-1" aria-labelledby="tambahSliderModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <form action="actions/tambah_slider.php" method="POST" enctype="multipart/form-data">
                    <div class="modal-header">
                        <h5 class="modal-title" id="tambahSliderModalLabel">Tambah Slider Baru</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="judul" class="form-label">Judul</label>
                            <input type="text" class="form-control" id="judul" name="judul" required>
                        </div>
                        <div class="mb-3">
                            <label for="subjudul" class="form-label">Sub Judul</label>
                            <input type="text" class="form-control" id="subjudul" name="subjudul" required>
                        </div>
                        <div class="mb-3">
                            <label for="gambar" class="form-label">Gambar Slider</label>
                            <input type="file" class="form-control" id="gambar" name="gambar" accept="image/*" required>
                            <small class="text-muted">Ukuran rekomendasi: 1920x1080 px</small>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal Edit Slider -->
    <div class="modal fade" id="editSliderModal" tabindex="-1" aria-labelledby="editSliderModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <form action="actions/edit_slider.php" method="POST" enctype="multipart/form-data">
                    <input type="hidden" id="edit_id" name="id_slider">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editSliderModalLabel">Edit Slider</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="edit_judul" class="form-label">Judul</label>
                            <input type="text" class="form-control" id="edit_judul" name="judul" required>
                        </div>
                        <div class="mb-3">
                            <label for="edit_subjudul" class="form-label">Sub Judul</label>
                            <input type="text" class="form-control" id="edit_subjudul" name="subjudul" required>
                        </div>
                        <div class="mb-3">
                            <label for="edit_gambar" class="form-label">Gambar Slider (Biarkan kosong jika tidak ingin
                                mengubah)</label>
                            <input type="file" class="form-control" id="edit_gambar" name="gambar" accept="image/*">
                            <small class="text-muted">Ukuran rekomendasi: 1920x1080 px</small>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal Hapus Slider -->
    <div class="modal fade" id="hapusSliderModal" tabindex="-1" aria-labelledby="hapusSliderModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="actions/hapus_slider.php" method="POST">
                    <input type="hidden" id="hapus_id" name="id_slider">
                    <div class="modal-header">
                        <h5 class="modal-title" id="hapusSliderModalLabel">Konfirmasi Hapus</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>Apakah Anda yakin ingin menghapus slider ini?</p>
                        <p class="text-danger">Aksi ini tidak dapat dibatalkan!</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-danger">Hapus</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal Event -->
    <div class="modal fade" id="eventModal" tabindex="-1" aria-labelledby="eventModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form id="eventForm" action="actions/tambah_event.php" method="POST">
                    <input type="hidden" id="eventId" name="id_event">
                    <div class="modal-header">
                        <h5 class="modal-title" id="eventModalLabel">Tambah Event Baru</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="eventDate" class="form-label">Tanggal Event</label>
                            <input type="date" class="form-control" id="eventDate" name="event_date" required>
                        </div>
                        <div class="mb-3">
                            <label for="eventTitleInput" class="form-label">Judul Event</label>
                            <input type="text" class="form-control" id="eventTitleInput" name="event_title" required>
                        </div>
                        <div class="mb-3">
                            <label for="eventDescription" class="form-label">Deskripsi</label>
                            <textarea class="form-control" id="eventDescription" name="event_description"
                                rows="3"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="eventColor" class="form-label">Warna</label>
                            <select class="form-control" id="eventColor" name="event_color">
                                <option value="#FF0000">Merah (Libur)</option>
                                <option value="#28A745">Hijau (Event)</option>
                                <option value="#FFC107">Kuning (Peringatan)</option>
                                <option value="#17A2B8">Biru (Info)</option>
                            </select>
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="isHoliday" name="is_holiday">
                            <label class="form-check-label" for="isHoliday">Hari Libur</label>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- JavaScript Libraries -->
    <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src='https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/main.min.js'></script>
    <script src='https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/locales/id.js'></script>

    <!-- Custom JavaScript -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var calendarEl = document.getElementById('calendar');
            var currentEvents = [];
            var currentViewDate = new Date(); // Simpan tanggal view saat ini

            // Inisialisasi kalender
            var calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'dayGridMonth',
                locale: 'id',
                headerToolbar: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'dayGridMonth'
                },
                dayMaxEventRows: 3,
                eventDisplay: 'block',
                events: function (fetchInfo, successCallback, failureCallback) {
                    currentViewDate = fetchInfo.start; // Update tanggal view
                    updateMonthYearTitle(fetchInfo.start);

                    $.ajax({
                        url: 'actions/get_events.php',
                        type: 'GET',
                        data: {
                            start: fetchInfo.startStr,
                            end: fetchInfo.endStr
                        },
                        success: function (response) {
                            currentEvents = response;
                            successCallback(response);
                            updateEventsList(fetchInfo.start);
                        },
                        error: function (xhr) {
                            console.error('Error loading events:', xhr.responseText);
                            $('#eventsList').html('<p class="text-muted text-center">Gagal memuat event</p>');
                        }
                    });
                },
                datesSet: function (info) {
                    currentViewDate = info.start;
                    updateMonthYearTitle(info.start);
                    updateEventsList(info.start);
                }
            });

            calendar.render();

            // Fungsi untuk update judul bulan dan tahun
            function updateMonthYearTitle(date) {
                var monthNames = ["Januari", "Februari", "Maret", "April", "Mei", "Juni",
                    "Juli", "Agustus", "September", "Oktober", "November", "Desember"];
                var month = monthNames[date.getMonth()];
                var year = date.getFullYear();
                $('#monthYearTitle').text('Daftar Event ' + month + ' ' + year);
            }

            // Fungsi untuk update daftar event
            function updateEventsList(date) {
                var monthEvents = currentEvents.filter(function (event) {
                    var eventDate = new Date(event.start);
                    return eventDate.getMonth() === date.getMonth() &&
                        eventDate.getFullYear() === date.getFullYear();
                });

                var eventsList = $('#eventsList');
                eventsList.empty();

                if (monthEvents.length === 0) {
                    eventsList.append('<p class="text-muted text-center">Tidak ada event di bulan ini</p>');
                    return;
                }

                // Urutkan event berdasarkan tanggal
                monthEvents.sort(function (a, b) {
                    return new Date(a.start) - new Date(b.start);
                });

                monthEvents.forEach(function (event) {
                    var eventDate = new Date(event.start);
                    var dateStr = eventDate.toLocaleDateString('id-ID', {
                        day: 'numeric',
                        month: 'short',
                        year: 'numeric'
                    });

                    var eventHtml = `
                <div class="event-item mb-3 p-2 border-bottom">
                    <div class="d-flex align-items-center">
                        <span class="event-dot me-2" style="background-color: ${event.color}"></span>
                        <strong>${event.title}</strong>
                    </div>
                    <div class="ms-4 mt-1">
                        <small class="text-muted">${dateStr}</small>
                        ${event.extendedProps.event_description ? `<p class="mb-1 small">${event.extendedProps.event_description}</p>` : ''}
                        <div class="d-flex justify-content-end mt-2">
                            <button class="btn btn-sm btn-outline-warning me-2 edit-event" 
                                    data-id="${event.id}">
                                <i class="bi bi-pencil"></i>
                            </button>
                            <button class="btn btn-sm btn-outline-danger delete-event" 
                                    data-id="${event.id}">
                                <i class="bi bi-trash"></i>
                            </button>
                        </div>
                    </div>
                </div>
            `;

                    eventsList.append(eventHtml);
                });

                // Event listener untuk tombol edit
                $('.edit-event').click(function () {
                    var eventId = $(this).data('id');
                    var event = currentEvents.find(e => e.id == eventId);

                    if (event) {
                        $('#eventModalLabel').text('Edit Event');
                        $('#eventId').val(event.id);
                        $('#eventDate').val(event.start.substring(0, 10));
                        $('#eventTitleInput').val(event.title);
                        $('#eventDescription').val(event.extendedProps.event_description);
                        $('#eventColor').val(event.color);
                        $('#isHoliday').prop('checked', event.extendedProps.is_holiday);
                        $('#eventForm').attr('action', 'actions/edit_event.php');
                        $('#eventModal').modal('show');
                    }
                });

                // Event listener untuk tombol hapus
                $('.delete-event').click(function () {
                    var eventId = $(this).data('id');

                    if (confirm('Apakah Anda yakin ingin menghapus event ini?')) {
                        $.ajax({
                            url: 'actions/hapus_event.php',
                            type: 'POST',
                            data: { id_event: eventId },
                            success: function () {
                                calendar.refetchEvents();
                                alert('Event berhasil dihapus');
                            },
                            error: function (xhr) {
                                alert('Gagal menghapus event: ' + xhr.responseText);
                            }
                        });
                    }
                });
            }

            // Tombol Tambah Event
            $('#addEventBtn').click(function () {
                $('#eventModalLabel').text('Tambah Event Baru');
                $('#eventForm')[0].reset();
                $('#eventId').val('');
                $('#eventForm').attr('action', 'actions/tambah_event.php');
                $('#eventDate').val(new Date().toISOString().substring(0, 10));
                $('#eventModal').modal('show');
            });

            // Submit form event
            $('#eventForm').submit(function (e) {
                e.preventDefault();

                var formData = new FormData(this);
                var action = $(this).attr('action');

                $.ajax({
                    url: action,
                    type: 'POST',
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function () {
                        $('#eventModal').modal('hide');
                        calendar.refetchEvents();
                        alert('Event berhasil disimpan');
                    },
                    error: function (xhr) {
                        alert('Terjadi kesalahan: ' + xhr.responseText);
                    }
                });
            });

            // Inisialisasi pertama
            updateMonthYearTitle(currentViewDate);
        });
    </script>
</body>

</html>