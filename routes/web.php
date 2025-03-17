<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {

$albums2000 = [
    [   "id"=>1,
         "img" => "https://picsum.photos/200",
        "title" => "Hybrid Theory",
        "description" => "Debut album by Linkin Park, released in 2000. A defining album of the nu-metal genre."
    ],
    [   "id"=>2,
        "img" => "https://picsum.photos/201",
        "title" => "The Eminem Show",
        "description" => "A 2002 album by Eminem that explores personal struggles and social issues."
    ],
    [   "id"=>3,
        "img" => "https://picsum.photos/202",
        "title" => "American Idiot",
        "description" => "A rock opera released by Green Day in 2004, known for its political themes."
    ],
    [   "id"=>4,
        "img" => "https://picsum.photos/203",
        "title" => "Back to Black",
        "description" => "Amy Winehouse's soulful and jazzy 2006 album that received critical acclaim."
    ]
];

    return view('welcome' , ['albums' => $albums2000]);
});

Route::get('/seconda-pagina', function () {
    return view('paginadue');
});

Route::get('/pagina-dettaglio/{id}', function($id){

    $albums2000 = [
        [   "id"=>1,
             "img" => "https://picsum.photos/200",
            "title" => "Hybrid Theory",
            "description" => "Debut album by Linkin Park, released in 2000. A defining album of the nu-metal genre."
        ],
        [   "id"=>2,
            "img" => "https://picsum.photos/201",
            "title" => "The Eminem Show",
            "description" => "A 2002 album by Eminem that explores personal struggles and social issues."
        ],
        [   "id"=>3,
            "img" => "https://picsum.photos/202",
            "title" => "American Idiot",
            "description" => "A rock opera released by Green Day in 2004, known for its political themes."
        ],
        [   "id"=>4,
            "img" => "https://picsum.photos/203",
            "title" => "Back to Black",
            "description" => "Amy Winehouse's soulful and jazzy 2006 album that received critical acclaim."
        ]
    ];

    foreach($albums2000 as $album){
        if($album['id'] == $id){
        return view('detail', ['album'=>$album]);
    }
}
    dd($id);
    return view ('detail');
})->name('pagina-dettaglio');