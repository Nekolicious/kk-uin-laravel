<footer class="shadow text-center text-lg-start bg-light">
    <!-- Search Forum -->
    <div class="bg-white py-3 py-md-5 text-center" id="footersearch">
        <div>
            <h3 class="fw-bold">FORUM DISKUSI</h3>
        </div>
        <div class="input-group input-group-sm mb-3 px-2 px-md-5">
            <input type="search" id="form1" placeholder="Cari pembahasan di forum diskusi" class="form-control rounded-0" style="background-color: rgb(221, 221, 221)" />
            <button type="button" class="btn btn-secondary rounded-0">
                <i class="fas fa-search"></i>
            </button>
        </div>
        <button type="button" class="btn btn-outline-dark fw-bold border-4 rounded-0 px-5">
            Pergi ke Forum &#8250;
        </button>
    </div>
    @if(View::hasSection('hidesearch'))
        @yield('hidesearch')
    @endif
    <!-- Search Forum End-->
    <!-- Copyright -->
    <div class="lead text-center p-2 p-md-4 text-white bg-secondary">
        &#169;2022 Copyright Kelompok Keahlian. All Rights Reserved.
    </div>
    <!-- Copyright End -->
</footer>