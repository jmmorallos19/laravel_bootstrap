<x-admin-layout>
    <div class="container-fluid p-0 d-flex flex-column-reverse flex-lg-row" style="column-gap: .5rem;">
        <div class="table-container pe-0 ps-0 pt-0 pb-3 col w-100 mt-3 mt-md-0">
            <div class="card" style="height: 100%;"> 

                <div class="col-12" style="background-color: #193c71;">
                    <!-- Tabs Navigation -->
                    <ul class="nav nav-tabs" style="border-bottom: 4px solid #193c71;" role="tablist">
                      <li class="nav-item text-uppercase border-0">
                        <a class="nav-link active" style="font-size: .9rem;" id="info-tab" data-bs-toggle="tab"
                          href="#booksList" role="tab">Books List</a>
                      </li>
                      <li class="nav-item text-uppercase border-0" style="margin-left: .1rem;">
                        <a class="nav-link" style="font-size: .9rem;" id="borrowed-tab" data-bs-toggle="tab" href="#borrowed"
                          role="tab">Borrowed</a>
                      </li>
                      <li class="nav-item text-uppercase border-0" style="margin-left: .1rem;">
                        <a class="nav-link" style="font-size: .9rem;" id="member-list-tab" data-bs-toggle="tab"
                          href="#memberlist" role="tab">Member List</a>
                      </li>
                      <li class="nav-item text-uppercase border-0" style="margin-left: .1rem;">
                        <a class="nav-link" style="font-size: .9rem;" id="available-tab" data-bs-toggle="tab"
                          href="#availableBooks" role="tab">Available Books</a>
                      </li>
                      <li class="nav-item text-uppercase border-0" style="margin-left: .1rem;">
                        <a class="nav-link" style="font-size: .9rem;" id="borrowers-tab" data-bs-toggle="tab"
                          href="#borrowers" role="tab">Borrowers</a>
                      </li>
                      <li class="nav-item text-uppercase border-0" style="margin-left: .1rem;">
                        <a class="nav-link" style="font-size: .9rem;" id="returned-tab" data-bs-toggle="tab" href="#returned"
                          role="tab">Returned</a>
                      </li>
                    </ul>
                  </div>
      
                 <!-- Tab Content -->
                <div class="tab-content info_div " style="width: 100%;"> 

                    <div class="tab-pane fade show active" id="booksList" role="tabpanel" aria-labelledby="info-tab"> 
                        @includeIf('components.admin.dashboard.bookList')
                    </div>

                    <div class="tab-pane fade" id="borrowed" role="tabpanel" aria-labelledby="info-tab"> 
                        @includeIf('components.admin.dashboard.borrowed')
                    </div>

                    <div class="tab-pane fade" id="memberlist" role="tabpanel" aria-labelledby="info-tab"> 
                        @includeIf('components.admin.dashboard.memberList')
                    </div>

                    <div class="tab-pane fade" id="availableBooks" role="tabpanel" aria-labelledby="info-tab"> 
                        @includeIf('components.admin.dashboard.availableBooks')
                    </div>

                    <div class="tab-pane fade" id="borrowers" role="tabpanel" aria-labelledby="info-tab"> 
                        @includeIf('components.admin.dashboard.borrower')
                    </div>

                    <div class="tab-pane fade" id="returned" role="tabpanel" aria-labelledby="info-tab"> 
                        @includeIf('components.admin.dashboard.returned')
                    </div>

                </div>
            </div>
        </div>
    
        <div class="reportCard_div col col-lg-3 col-12  d-flex align-items-center flex-wrap">
            @includeif('components.admin.dashboard.report')
        </div>
          
    </div>
</x-admin-layout>