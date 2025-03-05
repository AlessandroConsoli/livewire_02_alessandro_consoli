                                APPUNTI LEZIONI


<!--! Comandi per avviare un nuovo progetto con laravel 11  -->

1 <!--* composer create-project --prefer-dist laravel/laravel nome-del-tuo-progetto "11" -->

2 <!--* winpty mysql -u <il tuo username> -p
<!--* poi inserisci la password -->

3 <!--* create database <nome del database>; -->

4 <!--* exit -->

5 <!--* Collegare il database a table plus 
            <!--? Name = Nome che visualizzeremo su Table Plus
            <!--? Host = localhost
            <!--? Port = 3306
            <!--? user = root (o comunque quella scelta in fase di creazione dell'account mysql)
            <!--? password = root (o comunque quella scelta in fase di creazione dell'account mysql)
            <!--? Database = nome del database da collegare
            <!--? cliccare su connect

6 <!--* php atisan migrate

7 <!--* npm install bootstrap

8 <!--* php artisan serve

9 <!--* in app.js e app.css inserire gli import di bootstrap 
    <!--! NB: Le modifiche al CSS saranno applicate solo dopo aver attiva VITE (STEP 11) -->
            <!--* PER CSS
            <!--? @import 'bootstrap'; 
            <!--? @import url(./style.css);-->
            <!--* PER JS
            <!--? import './bootstrap';
            <!--? import 'bootstrap';

10 <!--* creare i componenti layout e navbar (eventualmente il footer)

11 <!--* nel layout inserire il @vite
    <!--?    All'interno di <head> e subito sotto <title>
    <!--?    @vite(['resources/css/app.css', 'resources/js/app.js'])    -->

12 <!--* Impostare la rotta per la welcome
    <!--? Creare un PublicController con il comando  php artisan make:controller PublicController
    <!--? Spostare la Funzione 'welcome' da web.php a PublicController 'aggiungendo public ed il nome della funzione'
    <!--? Modificare la rotta su web.php aggiungendo controller funzione e nome rotta 
    <!--!       Route::get('/', [PublicController::class, 'welcome'])->name('welcome');
    <!--? Modificare il tasto Home della navbar inserendo il link della rotta href="{{route('welcome')}}"

1? <!--* Installare fortify (per gestire login e registrazione degli utenti) 
  a <!--?     Seguire la guida su-->  https://laravel.com/docs/11.x/fortify#installation
  b <!--?     Lanciare-->  composer require laravel/fortify   
  b <!--?     per installare le dipendenze di PHP Lanciare-->  php artisan fortify:install       
  c <!--?     lanciare nuovamente-->  php artisan migrate
  d <!--?     entrare all'interno del percorso "App\Providers\FortifyServiceProvider.php" ed inserire 
  e <!--?     all'interno della funzione boot (in fondo) la seguente stringa: -->
  
            Fortify::registerView(function () {
                    return view('auth.register');
                });
    <!--?   (link dove prendere la stringa)     https://laravel.com/docs/11.x/fortify#registration
  f <!--?    In views creare la cartella "auth" e la vista register.blade.php   -->
  g <!--?    All'interno della vista register inserire i components di layout ed un container dove inserire un form
    <!--?    Per vedere la rotta creata da fortify lanciare php artisan route:list
  h <!--?    Aggiungere un tasto alla navbar per aprire la vista register e linkare con href="{{route('register')}}"
  i <!--?    aggiungere al form:    
    <!--?            action="{{route('register')}}"
    <!--?            method="POST"
    <!--?    e fuori dal tag <form> inserire il @csrf   token
  l <!--?    Impostare i campi del form [Nome, Email, Password, Conferma Password]
  m <!--?    aggiungere il campo name= all'interno di <input> e chiamare con lo stesso nome for= e id=
    <!--!    attenzione a "conferma password" che dovra obbligatoriamente avere valore name=password_confirmation
  n <!--? aprire il file fortify.php all'interno della cartella config, cercare la stringa 'home' => '/home',
    <!--?  e modificarla in 'home' => '/',  in modo da far funzionare il reindirizzamento dopo la registrazione
  o <!--? Aggiungere un tasto "Logout" alla navbar che sarà un form con action logout, metodo post ed un button di tipo submit
    <!--*            <li class="nav-item">
    <!--*                <form 
    <!--*                action="{{route('logout')}}" 
    <!--*                method="POST">
    <!--*                @csrf                    
    <!--*                    <button class="nav-link" type="submit">Logout</button>
    <!--*                </form>
    <!--*            </li>

    <!--! RIPRENDERE DA LEZIONE "Authentication e CRUD " AL MINUTO 00:59:30









    <!--?    Tornare su "App\Providers\FortifyServiceProvider.php" ed inserire all'interno della funzione boot (in fondo) la seguente stringa: -->

            Fortify::loginView(function () {
                    return view('auth.login');
                });

   <!--?    Andare sulla cartella "auth" ed al suo interno creare il file login.blade.php

   <!--? LARAVEL AUTENTICATION E CRUD al minuto 00:27:00

             
13 <!--*  -->

<!--! Vederti la lezione sui componenti, lezione sul bundling degli assets e la lezione sui controller -->





<!--!                           LIVEWIRE                    -->

<!--?    Documentazione:     https://livewire.laravel.com/docs/quickstart  -->

1 Installare usando il comando:  
<!--* composer require livewire/livewire -->

2 Lanciare il comando per creare il component "counter"
<!--* php artisan make:livewire counter -->

3 Richiamare all'interno della vista che ci interessa il nuovo componente "counter" appena creato 
  usando la sintassi:   livewire:nome-del-componente, in questo caso:  <!--* livewire:counter  -->
  oppure con <!--* @livewire('counter')  -->
  Importante!!! <!--! Un component livewire può contenere al sul interno un solo <div></div> contenente altri div --> 

4 Aprire il controller all'interno della cartella app\Livewire\Counter ed inserire le stringhe contenenti gli attributi suggeriti nella documentazione:      <!--!  https://livewire.laravel.com/docs/quickstart  -->

    public $count = 1;
 
    public function increment()
    {
        $this->count++;
    }
 
    public function decrement()
    {
        $this->count--;
    }
 
    public function render()
    {
        return view('livewire.counter');
    }


  <!--! IMPORTANTE!!!! Qualsiasi attribbuto pubblico dichiarato nel componente backend livewire sarà subito disponibile al componente frontend livewire tramite blade sintax -->  
  in questo caso: {{$count}}

5 Continuando a seguire la documentazione ci creiamo i due pulsanti per incrementare e decrementare
  <button wire:click="increment">+</button>
  <button wire:click="decrement">-</button>
  Questo tipo di azioni che modificano un attributo pubblico fanno automaticamente scattare il render del componente
    <!--? Minuto 00:53:00 della lezione Livewire  -->
6



