<?php

require_once WWW_ROOT . 'controller' . DS . 'Controller.php';
require_once WWW_ROOT . 'dao' . DS . 'EventDAO.php';

class EventsController extends Controller {

  private $eventDAO;

  function __construct() {
    $this->eventDAO = new EventDAO();
  }

  public function index() {

    $this->set('currentPage', 'index');

    $eventDAO = new EventDAO();
    $eventHighlights = $eventDAO->selectThree();
    $this->set('eventHighlights', $eventHighlights);


    $conditions = array();



    //example: search on organiser_id
    // $conditions[] = array(
    //   'field' => 'organiser_id',
    //   'comparator' => '=',
    //   'value' => 8
    // );

    //example: search on organiser name
    // $conditions[] = array(
    //   'field' => 'organiser',
    //   'comparator' => 'like',
    //   'value' => 'brussel'
    // );

    //example: search on tag name
    // $conditions[] = array(
    //   'field' => 'tag',
    //   'comparator' => '=',
    //   'value' => 'e-bike'
    // );

    //example: 1-day events on september 17
    // $conditions[] = array(
    //   'field' => 'start',
    //   'comparator' => '>=',
    //   'value' => '2018-09-17 00:00:00'
    // );
    // $conditions[] = array(
    //   'field' => 'end',
    //   'comparator' => '<=',
    //   'value' => '2018-09-17 23:59:59'
    // );

    //example: events on september 17 (includes multi-day events)
    $conditions[] = array(
      'field' => 'start',
      'comparator' => '<=',
      'value' => '2018-09-17 23:59:59'
    );
    $conditions[] = array(
      'field' => 'end',
      'comparator' => '>=',
      'value' => '2018-09-17 00:00:00'
    );

    //example: search on organiser, with certain end date + time
    // $conditions[] = array(
    //   'field' => 'organiser',
    //   'comparator' => 'like',
    //   'value' => 'brussel'
    // );
    // $conditions[] = array(
    //   'field' => 'end',
    //   'comparator' => '=',
    //   'value' => '2018-09-16 18:00:00'
    // );

    $events = $this->eventDAO->search($conditions);
    $this->set('events', $events);
  }

  public function programma() {

    $this->set('currentPage', 'programma');

    $conditions = array();

    // example: search on title
    if (isset($_GET['query'])) {
      $conditions[] = array(
        'field' => 'title',
        'comparator' => 'like',
        'value' => $_GET['query']
      );
    }

    if (isset($_GET['postal'])) {
      $conditions[] = array(
        'field' => 'postal',
        'comparator' => 'like',
        'value' => $_GET['postal']
      );
    }

    if(isset($_GET['date'])) {
      $conditions[] = array(
        'field' => 'start',
        'comparator' => '<=',
        // 'value' => '2018-09-17 23:59:59'
        'value' => $_GET['date'] . ' 23:59:59'
      );
      $conditions[] = array(
        'field' => 'end',
        'comparator' => '>=',
        // 'value' => '2018-09-17 00:00:00'
        'value' => $_GET['date'] . ' 00:00:00'
      );
    }

    $events = $this->eventDAO->search($conditions);
    foreach($events as &$event) {
      $event['startFormatted'] = date('d/m', strtotime($event['start']));
    }
    $this->set('events', $events);

    if (strtolower($_SERVER['HTTP_ACCEPT']) == 'application/json') {
      header('Content-Type: application/json');
      echo json_encode($events);
      exit();
    }
  }

  public function detail() {

    $this->set('currentPage', 'programma');

    $events = $this->eventDAO->selectById($_GET['id']);
    $this->set('events', $events);

    $eventDAO = new EventDAO();
    $eventHighlights = $eventDAO->selectThree();
    $this->set('eventHighlights', $eventHighlights);
  }

}
