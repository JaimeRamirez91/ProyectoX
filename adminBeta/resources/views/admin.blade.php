@extends('layoutadmin')

@section('contenido')
  <div class="container">   
     <ul class="nav nav-tabs admincss"  role="tablist">
           <li class="nav-item" >
                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Ordenes de trabajo</a>
           </li>
      <li class="nav-item">
            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">administraciòn</a>
      </li>
      <li class="nav-item">
           <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Contactos</a>
      </li>
       
    </ul>
  </div> 
  <div class="tab-content" id="myTabContent">

  <div class="tab-pane fade show active container" id="home" role="tabpanel" aria-labelledby="home-tab">

      <form class="form-inline" style="margin-top: 20px !important;">
        <div class="form-group ">
              <label for="inputState" class="col-lg-4">Ruta de trabajo:</label>
                <select id="inputState" class="form-control col-lg-6">

                    <option selected>----Buscar----</option>
                     @foreach($rutas as $Ruta)
                    
                     <option>  {{$Ruta->nomruta}}</option>
                    @endforeach
                    

                </select>

                <label for="inputState" class="col-lg-4 margentabla">Departamento:</label>
                <select id="inputState" class="form-control col-lg-6 margentabla">

                    <option selected>----Buscar----</option>
                    @foreach($rutas as $Ruta)
                    
                     <option>  {{$Ruta->nomzona}}</option>
                    @endforeach

                </select>
        </div>

          
      </form>
  </div>
  <div class="tab-pane fade container" id="profile" role="tabpanel" aria-labelledby="profile-tab">
      Muy lejos, más allá de las montañas de palabras, alejados de los países de las vocales y las consonantes, viven los textos simulados. Viven aislados en casas de letras, en la costa de la semántica, un gran océano de lenguas. Un riachuelo llamado Pons fluye por su pueblo y los abastece con las normas necesarias. Hablamos de un país paraisomático en el que a uno le caen su
  </div>
  <div class="tab-pane fade container" id="contact" role="tabpanel" aria-labelledby="contact-tab">

    Una mañana, tras un sueño intranquilo, Gregorio Samsa se despertó convertido en un monstruoso insecto. Estaba echado de espaldas sobre un duro caparazón 


  </div>
</div> 
@stop    


