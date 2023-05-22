<section id="faq">
   <div class="container-fluid-xs container-lg p-5 " style="margin-top:50px">
      <div class="row gx-5 mb-5" data-aos="fade-down">
         <div class="col-lg-12 text-center">
            <h1 class="fw-bolder mb-0">Frequently Asked Questions</h1>
         </div>
      </div>
      <div class="row gx-5 justify-content-around align-items-center">
         <div class="col-lg-12">
            <div class="accordion accordion-flush" id="accordion_faq">
               <div class="row gx-5">
                  <div class="col-12 col-md-6" data-aos="fade-right">
                     @foreach ($left_questions as $question)
                     <div class="pb-3">
                        <div class="accordion-item shadow-sm">
                           <h2 class="accordion-header" id="left_question_{{ $loop->index+1 }}">
                              <button class="accordion-button collapsed bg-body border-bottom 
                                 border-primary" type="button" data-bs-toggle="collapse" 
                                 data-bs-target="#left_collapse_{{ $loop->index+1 }}" aria-expanded="false" 
                                 aria-controls="left_collapse_{{ $loop->index+1 }}">
                              <i class="fa-solid fa-circle-question fa-lg me-2"></i> 
                              <strong>{{ $question['question'] }}</strong> 
                              </button>
                           </h2>
                           <div id="left_collapse_{{ $loop->index+1 }}" class="accordion-collapse collapse" 
                              aria-labelledby="left_question_{{ $loop->index+1 }}" data-bs-parent="#accordion_faq">
                              <div class="accordion-body">
                                 {{ $question['answer'] }}
                              </div>
                           </div>
                        </div>
                     </div>
                     @endforeach
                  </div>
                  <div class="col-12 col-md-6" data-aos="fade-left">
                     @foreach ($right_questions as $question)
                     <div class="pb-3">
                        <div class="accordion-item shadow-sm">
                           <h2 class="accordion-header" id="right_question_{{ $loop->index+1 }}">
                              <button class="accordion-button collapsed bg-body border-bottom 
                                 border-primary" type="button" data-bs-toggle="collapse" 
                                 data-bs-target="#right_collapse_{{ $loop->index+1 }}" aria-expanded="false" 
                                 aria-controls="right_collapse_{{ $loop->index+1 }}">
                              <i class="fa-solid fa-circle-question fa-lg me-2"></i> 
                              <strong>{{ $question['question'] }}</strong> 
                              </button>
                           </h2>
                           <div id="right_collapse_{{ $loop->index+1 }}" class="accordion-collapse collapse" 
                              aria-labelledby="right_question_{{ $loop->index+1 }}" data-bs-parent="#accordion_faq">
                              <div class="accordion-body">
                                 {{ $question['answer'] }}
                              </div>
                           </div>
                        </div>
                     </div>
                     @endforeach
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
