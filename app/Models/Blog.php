<?php
    namespace App\Models;
    class Blog
    {
      public static function all(){
        return [
            [
                'id' => 1,
                'title' => 'Blog 1',
                'description' => 'Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. 
                        Le Lorem Ipsum est le faux texte standard de limprimerie depuis les années 1500,
                        quand un imprimeur anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte. 
                        Il na pas fait que survivre cinq siècles, mais s est aussi adapté à la bureautique informatique sans que son contenu n en soit modifié. 
                        Il a été popularisé dans les années 1960 grâce à la vente de feuilles Letraset contenant des passages du Lorem Ipsum, et, plus récemment, 
                        par son inclusion dans des applications de mise en page de texte, comme Aldus PageMaker.',
            ],
            [
                'id' => 2,
                'title' => 'Blog 2',
                'description' => 'Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. 
                        Le Lorem Ipsum est le faux texte standard de limprimerie depuis les années 1500,
                        quand un imprimeur anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte. 
                        Il na pas fait que survivre cinq siècles, mais s est aussi adapté à la bureautique informatique sans que son contenu n en soit modifié. 
                        Il a été popularisé dans les années 1960 grâce à la vente de feuilles Letraset contenant des passages du Lorem Ipsum, et, plus récemment, 
                        par son inclusion dans des applications de mise en page de texte, comme Aldus PageMaker.',
            ]
            ];
      }
      public static function find($id){
        $blog = self::all();
        foreach($blog as $blog){
            if($blog['id'] == $id){
                return $blog;
            }
        }
      }
    }