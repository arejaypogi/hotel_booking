<?php

require_once '../app/models/Room.php';

class RoomsController extends controller {

    // Show all rooms
    public function index() {
        $room = new Room();
        $data['rooms'] = $room->getAll();

        $this->view('rooms/index', $data);
    }

    public function create() {
        $this->view('rooms/create');
    }

    public function store() {
        $room = new room();

        $room->create(
            $_POST['name'],
            $_POST['price'],
            $_POST['capacity']
        );

    header("Location: index.php?url=rooms/index");
    }

    public function edit() {
        $room = new Room();
        $data['room'] = $room->getById($_GET['id']);

        $this->view('rooms/edit', $data);
    }

    public function update() {
        $room = new room();

        $room->update(
            $_POST['id'],
            $_POST['name'],
            $_POST['price'],
            $_POST['capacity']
        );
        header("Location: index.php?url=rooms/index");
    }

    public function delete(){
        $room = new Room();
        $room->delete($_GET['id']);
        
        header("Location: index.php?url=rooms/index");
    }


}

//create
//store
//edit
//update
//delete