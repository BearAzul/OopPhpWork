<?php

class Library
{
   private $model;

   function __construct()
   {
      $this->model = new LibraryModel();
   }

   public function index()
   {
      $data['listBuku'] = $this->model->getLibrary();
      return $this->render('daftar-buku', $data);
   }

   private function render($view, $data = [])
   {
      if ($data) {
         foreach ($data as $key => $value) {
            $$key = $value;
         }
      }

      require_once __DIR__ . '/../views/' . $view . '.php';
   }
}
