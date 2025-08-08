<?php
require '../../config/koneksi.php';

header('Content-Type: application/json');

try {
    // Jika request untuk event spesifik
    if (isset($_POST['id_event'])) {
        $stmt = $pdo->prepare("SELECT * FROM calendar_events WHERE id_event = ?");
        $stmt->execute([$_POST['id_event']]);
        $event = $stmt->fetch(PDO::FETCH_ASSOC);
        echo json_encode($event);
        exit();
    }
    
    // Jika request untuk bulan tertentu
    if (isset($_POST['date'])) {
        $date = new DateTime($_POST['date']);
        $firstDay = $date->format('Y-m-01');
        $lastDay = $date->format('Y-m-t');
        
        $stmt = $pdo->prepare("SELECT * FROM calendar_events 
                              WHERE event_date BETWEEN ? AND ? 
                              ORDER BY event_date");
        $stmt->execute([$firstDay, $lastDay]);
        $events = $stmt->fetchAll(PDO::FETCH_ASSOC);
        echo json_encode($events);
        exit();
    }
    
    // Jika request untuk fullcalendar (range tanggal)
    $start = $_GET['start'] ?? date('Y-m-01');
    $end = $_GET['end'] ?? date('Y-m-t');
    
    $stmt = $pdo->prepare("SELECT * FROM calendar_events 
                          WHERE event_date BETWEEN ? AND ? 
                          ORDER BY event_date");
    $stmt->execute([$start, $end]);
    $events = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    $formattedEvents = array_map(function($event) {
        return [
            'id' => $event['id_event'],
            'title' => $event['event_title'],
            'start' => $event['event_date'],
            'color' => $event['event_color'],
            'extendedProps' => [
                'id_event' => $event['id_event'],
                'event_title' => $event['event_title'],
                'event_description' => $event['event_description'],
                'event_date' => $event['event_date'],
                'event_color' => $event['event_color'],
                'is_holiday' => $event['is_holiday']
            ]
        ];
    }, $events);
    
    echo json_encode($formattedEvents);
} catch (PDOException $e) {
    echo json_encode(['error' => $e->getMessage()]);
}
?>