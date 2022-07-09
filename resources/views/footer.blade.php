<footer class="shadow text-center text-lg-start bg-light">
    <!-- Search Forum -->
    @php
        $usesearch = true
    @endphp
    
    @if($usesearch == false)

    @else
        @include('forumsearch')
    @endif
    <!-- Search Forum End-->
    <!-- Copyright -->
    <div class="lead text-center p-2 p-md-4 text-white bg-secondary">
        &#169;2022 Copyright Kelompok Keahlian. All Rights Reserved.
    </div>
    <!-- Copyright End -->
</footer>