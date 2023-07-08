 <!-- modal delivery address -->
 <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
     <div class="modal-dialog modal-dialog-centered">
         <div class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-title">Add Delivery Address</h5>
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                 </button>
             </div>
             <div class="modal-body">
                 <form class="">
                     <div class="form-row">
                         <div class="col-md-12 form-group">
                             <label class="form-label">Delivery Area</label>
                             <div class="input-group">
                                 <input placeholder="Delivery Area" type="text" class="form-control">
                                 <div class="input-group-append"><button type="button" class="btn btn-outline-secondary"><i class="feather-map-pin"></i></button></div>
                             </div>
                         </div>
                         <div class="col-md-12 form-group"><label class="form-label">Complete Address</label><input placeholder="Complete Address e.g. house number, street name, landmark" type="text" class="form-control"></div>
                         <div class="col-md-12 form-group"><label class="form-label">Mobile no.</label><input placeholder="Mobile e.g. 790****856" type="tel" class="form-control"></div>
                         <div class="col-md-12 form-group"><label class="form-label">Approximate Distance(in-metre)</label><input placeholder="Distance from Restaurant e.g. 3000" type="number" class="form-control"></div>
                         <div class="col-md-12 form-group"><label class="form-label">Delivery Instructions</label><input placeholder="Delivery Instructions e.g. Opposite Gold Souk Mall" type="text" class="form-control"></div>
                         <div class="mb-0 col-md-12 form-group">
                             <label class="form-label">Nickname</label>
                             <div class="btn-group btn-group-toggle w-100" data-toggle="buttons">
                                 <label class="btn btn-outline-secondary active">
                                     <input type="radio" name="options" id="option12" checked> Home
                                 </label>
                                 <label class="btn btn-outline-secondary">
                                     <input type="radio" name="options" id="option22"> Work
                                 </label>
                                 <label class="btn btn-outline-secondary">
                                     <input type="radio" name="options" id="option32"> Other
                                 </label>
                             </div>
                         </div>
                     </div>
                 </form>
             </div>
             <div class="modal-footer p-0 border-0">
                 <div class="col-6 m-0 p-0">
                     <button type="button" class="btn border-top btn-lg btn-block" data-dismiss="modal">Close</button>
                 </div>
                 <div class="col-6 m-0 p-0">
                     <button type="button" class="btn btn-primary btn-lg btn-block">Save changes</button>
                 </div>
             </div>
         </div>
     </div>
 </div>