@extends('layoutadmin')

@section('contenido')

<!--                 Nav tab menu              -->
    <div class="nav-tabs-custom">
         
            <ul class="nav nav-tabs admincss"  role="tablist">
                 <li class="nav-item active" >
                      <a class="nav-link " id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true" aria-expanden="false">Agregar Orden de  trabajo</a>
                 </li>
                <li class="nav-item">
                      <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Buscar y administrar Orden de Trabajo</a>
                </li>
                
             
            </ul>
            <!--Formulario para resoluciones de tablet y mobile-->
            <div class=" visible-xs visible-sm callout callout-danger">
                
                <h4> <i class="icon fa fa-ban"></i> Tip!</h4>

                <p>El contenido del formulario no esta disponible para esta resoluciòn de pantalla, por favor maximise la pantalla. !!Gracias!!</p>
             </div>
            
      
   <!--                 contenedor de tablas            -->   
            <div class="tab-content hidden-xs hidden-sm" id="myTabContent" >

                  <div class="tab-pane fade active in " " id="home" role="tabpanel" aria-labelledby="home-tab" style="background: white;">
                    
                         
                            <div class=" align-content-around ">
                              <div >
                                               <div class="col-lg-6  col-lg-offset-1   col-md-6  col-md-offset-1 " id="Cnt1OT" >
                                               <h4 class="bg-danger" style=" text-align: center; color: white; border: 1px solid #46b8da !important; background: #0D939B !important;
                                                  border-radius: 10px !important;">DATOS GENERALES</h4>
                                                 <div class="row" style="margin-top: 20px !important">
                                                    <div class="col-lg-6 col-md-12" >
                                                          <div class="input-group">
                                                              <span class="input-group-addon bg-info colorSpan" id="basic-addon1"  style="">OT</span>
                                                              <input type="text" class="form-control InputStyle" placeholder="Orden de Trabajo" aria-describedby="basic-addon1"">
                                                          </div>    
                                                    </div> 
                                                    <div class="col-lg-6 col-md-12 separadorLabel">

                                                          <div class="card fc fc-unthemed fc-ltr">
                                                                <div class="input-group">
                                                                    <div class="input-group-addon colorSpan">
                                                                      <i class="fa fa-calendar "></i>
                                                                    </div>
                                                                  <input class="form-control InputStyle" id="date" name="date" placeholder="DD/MM/YYYY" type="text"/>
                                                                </div>                    
                                                          </div>   
                                                    </div>   
                                                 </div>
                                                 <li role="separator" class="divider SeparatorColor" ></li>
                                                 <div class="row">
                                                      <div class="col-lg-6 col-md-12">
                                                          <div class="input-group">
                                                              <span class="input-group-addon  colorSpan" id="basic-addon1" style="width: 12px">Siebel</span>
                                                              <input type="text" class="form-control InputStyle" placeholder="OT Siebel" aria-describedby="basic-addon1">
                                                          </div>    
                                                      </div>
                                                      <div class="col-lg-6 col-md-12 separadorLabel">
                                                           <div class="input-group">
                                                              <span class="input-group-addon colorSpan colorSpan" id="basic-addon1">Jornada</span>
                                                              <select id="inputState" class="form-control InputStyle">
                                                                  <option selected>---Seleccione---</option>
                                                                  <option>AM</option>
                                                                  <option>PM</option>
                                                              </select>
                                                            </div>  
                                                      </div>
                                                 </div>
                                                  <li role="separator" class="divider SeparatorColor" ></li>
                                                 <div class="row">
                                                      <div class="col-lg-6 col-md-12 ">
                                                           <div class="input-group">
                                                              <span class="input-group-addon colorSpan " id="basic-addon1">Tipo OT</span>
                                                              <select id="inputState" class="form-control InputStyle">
                                                                  <option selected>---Seleccione---</option>
                                                                  <option >x</option>
                                                                  <option >y</option>
                                                              </select>
                                                            </div>  
                                                      </div>
                                                 </div>

                                                  <li role="separator" class="divider SeparatorColor"></li>

                                                 <div class="row ">
                                                      <div class="col-lg-12 col-md-12">
                                                            <div class="form-group">
                                                                <label for="comment" >Comentario:</label>
                                                                <textarea class="form-control InputStyle" rows="2" id="comment"  style="resize:none;"></textarea>
                                                             </div>   
                                                      </div>
                                                   
                                                 </div>
                                                 <h4  style=" text-align: center; color: white; border: 1px solid #46b8da !important; background: #0D939B !important;
                                                  border-radius: 10px !important;">DETALLE CUENTA-SERVICIO
                                                </h4>
                                                <div class="row">
                                                   <li role="separator" class="divider SeparatorColor" ></li>
                                                  <div class="col-lg-6 col-md-6">
                                                          <div class="input-group">
                                                              <span class="input-group-addon bg-info colorSpan" id="basic-addon1"  style="">Cuenta: </span>
                                                              <input type="text" class="form-control InputStyle" placeholder="Nùmero de cuenta" aria-describedby="basic-addon1">

                                                          </div>    
                                                  </div>

                                                  <div class="col-lg-6 col-md-12">
                                                    <div class="input-group">
                                                              <button type="button" class="btn btn-block btn-primary btn-sm">
                                                                 <i class="fa fa-search"> Buscar</i>
                                                              </button>

                                                          </div> 
                                                  </div> 
                                                </div>
                                                 <li role="separator" class="divider SeparatorColor" ></li>
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-12">
                                                         <div class="input-group">
                                                              <span class="input-group-addon bg-info colorSpan" id="basic-addon1"  style="">Nombres: </span>
                                                              <input type="text" class="form-control InputStyle" placeholder="Nombres Usuario" aria-describedby="basic-addon1">

                                                          </div> 
                                                      
                                                    </div>
                                                      <div class="col-lg-6 col-md-12 separadorLabel">
                                                         <div class="input-group">
                                                              <span class="input-group-addon bg-info colorSpan" id="basic-addon1"  style="">Apellidos: </span>
                                                              <input type="text" class="form-control InputStyle" placeholder="Apellidos Usuario" aria-describedby="basic-addon1">

                                                          </div> 
                                                      
                                                    </div>
                                                </div>
                                                 <li role="separator" class="divider SeparatorColor" ></li>
                                                 <div class="row ">
                                                      <div class="col-lg-12 col-md-12">
                                                            <div class="form-group">
                                                                <label for="comment" >Direcciòn:</label>
                                                                <textarea class="form-control InputStyle" rows="2" id="comment"  style="resize:none;"></textarea>
                                                             </div>   
                                                      </div>
                                                   
                                                 </div>

                                                 <li role="separator" class="divider SeparatorColor" ></li>

                                                 <div class="row">
                                                    <div class="col-lg-6 col-md-12">
                                                         <div class="input-group">
                                                              <span class="input-group-addon bg-info colorSpan" id="basic-addon1"  style="">contactos: </span>
                                                              <input type="text" class="form-control InputStyle" placeholder="Telefonos" aria-describedby="basic-addon1">

                                                          </div> 
                                                      
                                                    </div>
                                                      <div class="col-lg-6 col-md-12 separadorLabel">
                                                         <div class="input-group">
                                                              <span class="input-group-addon bg-info colorSpan" id="basic-addon1"  style="">Ruta: </span>
                                                              <input type="text" class="form-control InputStyle" placeholder="Ruta" aria-describedby="basic-addon1">

                                                          </div> 
                                                      
                                                    </div>

                                                </div>
                                                 <li role="separator" class="divider SeparatorColor" ></li>
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-12">
                                                         <div class="input-group">
                                                              <span class="input-group-addon bg-info colorSpan" id="basic-addon1"  style="">Nodo: </span>
                                                              <input type="text" class="form-control InputStyle" placeholder="Nodo" aria-describedby="basic-addon1">

                                                          </div> 
                                                      
                                                    </div>
                                                      <div class="col-lg-6 col-md-12 separadorLabel">
                                                         <div class="input-group">
                                                              <span class="input-group-addon bg-info colorSpan" id="basic-addon1"  style="">Zona: </span>
                                                              <input type="text" class="form-control InputStyle" placeholder="Zona" aria-describedby="basic-addon1">

                                                          </div> 
                                                      
                                                    </div>
                                                  </div>
                                                   <li role="separator" class="divider SeparatorColor"></li>

                                                 <h4  style=" text-align: center; color: white; border: 1px solid #46b8da !important; background: #0D939B !important;
                                                  border-radius: 10px !important;">UNIDAD TECNICA
                                                </h4>
                                                <li role="separator" class="divider" style="color: white"></li>
                                                 <div class="row">
                                                    <div class="col-lg-6 col-md-12">
                                                         <div class="input-group">
                                                              <span class="input-group-addon bg-info colorSpan" id="basic-addon1"  style="">Unidad: </span>
                                                              <input type="text" class="form-control InputStyle" placeholder="Còdigo de unidad" aria-describedby="basic-addon1">

                                                          </div> 
                                                      
                                                    </div>
                                                      <div class="col-lg-6 col-md-12 separadorLabel">
                                                         <div class="input-group">

                                                          <button type="button" class="btn btn-block btn-primary btn-sm">
                                                                 <i class="fa fa-search"> ..... </i>
                                                              </button>
                                                              
                                                          </div> 
                                                      
                                                    </div>
                                                  </div>
                                                   <li role="separator" class="divider SeparatorColor" ></li>
                                                  <div class="row">
                                                      <div class="col-lg-6 col-md-12">
                                                          <div class="input-group">
                                                              <span class="input-group-addon colorSpan colorSpan" id="basic-addon1">Estado</span>
                                                              <select id="inputState" class="form-control InputStyle">
                                                                  <option selected>---Seleccione---</option>
                                                                  <option>Efectuado</option>
                                                                  <option>No efectuado</option>
                                                              </select>
                                                          </div>    
                                                      </div>
                                                      <div class="col-lg-6 col-md-12 separadorLabel">
                                                           <div class="input-group">
                                                              <span class="input-group-addon colorSpan colorSpan" id="basic-addon1">Tipificaciòn</span>
                                                              <select id="inputState" class="form-control InputStyle">
                                                                  <option selected>---Seleccione---</option>
                                                                  <option>x</option>
                                                                  <option>y</option>
                                                              </select>
                                                            </div>  
                                                      </div>
                                                 </div>
                                                  <li role="separator" class="divider SeparatorColor" ></li>
                                                 <div class="row ">
                                                      <div class="col-lg-12 col-md-12">
                                                            <div class="form-group">
                                                                <label for="comment" >Comentario:</label>
                                                                <textarea class="form-control InputStyle" rows="2" id="comment"  style="resize:none;"></textarea>
                                                             </div>   
                                                      </div>
                                                   
                                                 </div>
                                                  

                                          </div>
                                         

                                               <div class="col-lg-4 col-md-4"  id="Cnt2OT" style="height : 800px; background: white;  ">
                                                 <div class="row">
                                                      <div class="col-lg-11">
                                                        <div class="panel panel-info " id="panelComent" style="margin-top: 10px !important;">
                                                            <div class="panel-heading bg-info" style="text-align: center; ">
                                                              Detalle de trabajo
                                                            </div>
                                                            <div class="panel-body">
                                                              <textarea class="form-control InputStyle" rows="8" id="comment" style="resize:none;"></textarea>
                                                            </div>
                                                         </div>
                                                             
                                                      </div>
                                                   
                                                 </div>

                                                  

                                                  <li role="separator" class="divider" style="color: white"></li>

                                                    <div class="row">
                                                      <div class="col-lg-11">
                                                        <div class="panel panel-info " id="panelComent" style="margin-top: 10px !important;">
                                                            <div class="panel-heading bg-info" style="text-align: center; ">
                                                             Detalle de Ruta
                                                            </div>
                                                            <div class="panel-body">
                                                              <div class="input-group">
                                                              <span class="input-group-addon bg-info colorSpan" id="basic-addon1"  style="">Unidad: </span>
                                                              <input type="text" class="form-control InputStyle" placeholder="Numero de Unidad" aria-describedby="basic-addon1">


                                                          </div> 
                                                           <li role="separator" class="divider" style="color: white"></li>
                                                           <div class="card fc fc-unthemed fc-ltr">
                                                                <div class="input-group">
                                                                    <div class="input-group-addon colorSpan">
                                                                      <i class="fa fa-calendar "></i>
                                                                    </div>
                                                                  <input class="form-control InputStyle" id="date" name="date" placeholder="DD/MM/YYYY" type="text"/>
                                                                </div>                    
                                                          </div> 

                                                           <li role="separator" class="divider" style="color: white"></li>
                                                           <label for="comment" >Detalles:</label>

                                                          <textarea class="form-control InputStyle" rows="8" id="comment" style="resize:none;"></textarea> 

                                                            </div>
                                                         </div>
                                                             
                                                      </div>
                                                   
                                                 </div>
                                                 <div class="row">
                                                  <div class="col-lg-3 col-lg-offset-3">
                                                          <div class="input-group">
                                                              <button type="button" class="btn btn-block btn-success">Guardar</button>
                                                             
                                                          </div>    
                                                      </div>
                                                      <div class="col-lg-3">
                                                          <div class="input-group">
                                                              
                                                              <button type="button" class="btn btn-block btn-danger">Cancelar</button>
                                                          </div>    
                                                      </div>
                                                   
                                                 </div>

                                               </div>      
                            </div>
                            </div>
                          
                  </div>

                  <div class="tab-pane fade " id="profile" role="tabpanel" aria-labelledby="profile-tab" style="background: white">
                    
                    div2

                  </div>

            </div> 
    </div>
@stop    


