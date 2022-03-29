<!-- Footer with components -->
<section id="component-footer">
    <footer class="footer bg-light">
        <div
            class="container-fluid d-flex flex-md-row flex-column justify-content-between align-items-md-center gap-1 container-p-x py-3">
            <div>
                <span>2022 ©
                    <a href="https://ptjpt.co.id/" target="_blank" class="footer-text fw-bolder">PT Jasamarga Pandaan
                        Tol</a>
                </span>
            </div>
            <div>
                <a href="{{ route('logout') }}" class="btn btn-sm btn-outline-danger" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                    </i> Logout</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>
        </div>
    </footer>
</section>
<!--/ Footer with components -->
