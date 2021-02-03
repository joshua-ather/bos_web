{{-- Main Sidebar Container --}}
<aside class="main-sidebar sidebar-dark-primary">
    {{-- Brand Logo --}}
    <div class="brand-link">
        <a href="/" id="logo_brand">
            <img src="{{ asset('img/logo.png') }}" alt="BOS Logo" class="brand-image">
        </a>
    </div>

    {{-- Sidebar --}}
    <div class="sidebar">
        {{-- Sidebar Menu --}}
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="/" class="nav-link active">
                        <i class="nav-icon">
                            <svg width="18px" height="18px" viewBox="0 0 20 20"><title>ico_dashboard</title><path d="M297.4,425v3.9c0,1.4-.4,1.9-1.8,1.9h-5.5c-1.4,0-1.8-.5-1.8-1.9s-.1-5.2,0-7.9.4-1.9,1.8-1.9h5.5c1.4,0,1.8.5,1.8,1.9Z" transform="translate(-288.2 -410.8)" fill="#ffffff"/><path d="M308.2,416.7c0,1.3.1,2.6,0,4s-.4,1.7-1.7,1.7h-5.7c-1.2.1-1.7-.5-1.7-1.6v-8.3c0-1.2.5-1.7,1.8-1.7h5.6c1.3,0,1.7.5,1.7,1.7S308.2,415.3,308.2,416.7Z" transform="translate(-288.2 -410.8)" fill="#ffffff"/><path d="M303.6,424.1h3a1.4,1.4,0,0,1,1.6,1.6c.1,1.2,0,2.3.1,3.4a1.5,1.5,0,0,1-1.6,1.7h-6.1a1.4,1.4,0,0,1-1.5-1.6c0-1.2-.1-2.4,0-3.5a1.4,1.4,0,0,1,1.5-1.6Z" transform="translate(-288.2 -410.8)" fill="#ffffff"/><path d="M292.8,417.4h-2.9a1.4,1.4,0,0,1-1.6-1.6,18.2,18.2,0,0,1,0-3.3c0-1.1.5-1.7,1.5-1.7h6a1.4,1.4,0,0,1,1.6,1.6v3.4a1.4,1.4,0,0,1-1.6,1.6Z" transform="translate(-288.2 -410.8)" fill="#ffffff"/></svg>
                        </i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/" class="nav-link">
                        <i class="nav-icon">
                            <svg width="18px" height="18px" viewBox="0 0 20 20"><title>ico_users</title><path d="M298.2,430.7h-8.1c-1.8-.1-2.2-.7-1.5-2.4a25.6,25.6,0,0,1,2.7-4.5,2.3,2.3,0,0,1,3.5-.3c2.4,2.1,4.8,2,7.3,0s2.1-.9,3,.2a15.9,15.9,0,0,1,3,5.4c.4,1-.1,1.5-1.4,1.5Z" transform="translate(-288.3 -410.6)" fill="#ffffff"/><path d="M293,415.9a5.2,5.2,0,0,1,3-4.7,4.9,4.9,0,0,1,5.3.5,6,6,0,0,1,2.1,6c-.8,4.3-5,6.2-8.2,3.8C293.8,420.4,293,418.5,293,415.9Z" transform="translate(-288.3 -410.6)" fill="#ffffff"/></svg>
                        </i>
                        <p>Customer</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/" class="nav-link">
                        <i class="nav-icon">
                            <svg width="18px" height="18px" viewBox="0 0 18 20.1"><title>ico_pesanan</title><path d="M298.2,430.1h-6.6c-1.6,0-2.3-.7-2.3-2.3-.1-4.5-.1-8.9,0-13.3,0-1.6.7-2.3,2.3-2.4h1.9a2.5,2.5,0,0,0,2.7-1.1,2.7,2.7,0,0,1,4.4.4,1.8,1.8,0,0,0,1.6.8h3a2,2,0,0,1,2,2.1c.1,4.6.1,9.3,0,13.9a1.9,1.9,0,0,1-2.1,2Zm0-12h4.3c.9,0,.7-.5.7-1.1s.2-1-.7-1H294c-.9,0-.7.5-.7,1s-.2,1.1.7,1.1Zm.2,2H294c-.9,0-.7.5-.7,1s-.2,1.1.7,1.1h8.5c.9,0,.7-.6.7-1.1s.2-1-.7-1Zm-1.7,6h2.7c.9,0,.9-.4.9-1s.1-1.1-.9-1.1h-5.2c-.8,0-1,.2-1,1s.2,1.1,1.1,1.1Zm1.5-12c.6,0,1-.3,1-.9a1,1,0,0,0-1.9-.1C297.2,413.7,297.6,414,298.2,414.1Z" transform="translate(-289.2 -410.1)" fill="#ffffff"/></svg>
                        </i>
                        <p>Order</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/" class="nav-link">
                        <i class="nav-icon">
                            <svg width="18px" height="18px" viewBox="0 0 18 18"><title>mdi_build</title><path d="M292,412.9c2.3-1,4.1-.8,5.7.4a4.9,4.9,0,0,1,2.1,5.1,2.1,2.1,0,0,0,.6,2l6.2,6.1c.8.8.7,1.3,0,2-2.4,2.3-1.9,2.3-4.2,0s-3.5-3.4-5.2-5.2a1.5,1.5,0,0,0-1.7-.5,5.4,5.4,0,0,1-6.1-6.7c.2-.6.4-1,1-.3a9.3,9.3,0,0,0,1.4,1.4c1.5,1.5,1.5,1.5,3,.1s.9-1.3,0-2Z" transform="translate(-289.2 -412.3)" fill="#ffffff"/></svg>
                        </i>
                        <p>CS - 58</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/" class="nav-link">
                        <i class="nav-icon">
                            <svg width="18px" height="18px" viewBox="0 0 20 20"><title>ico_inventory</title><path d="M297.4,425v3.9c0,1.4-.4,1.9-1.8,1.9h-5.5c-1.4,0-1.8-.5-1.8-1.9s-.1-5.2,0-7.9.4-1.9,1.8-1.9h5.5c1.4,0,1.8.5,1.8,1.9Z" transform="translate(-288.2 -410.8)" fill="#ffffff"/><path d="M308.2,416.7c0,1.3.1,2.6,0,4s-.4,1.7-1.7,1.7h-5.7c-1.2.1-1.7-.5-1.7-1.6v-8.3c0-1.2.5-1.7,1.8-1.7h5.6c1.3,0,1.7.5,1.7,1.7S308.2,415.3,308.2,416.7Z" transform="translate(-288.2 -410.8)" fill="#ffffff"/><path d="M303.6,424.1h3a1.4,1.4,0,0,1,1.6,1.6c.1,1.2,0,2.3.1,3.4a1.5,1.5,0,0,1-1.6,1.7h-6.1a1.4,1.4,0,0,1-1.5-1.6c0-1.2-.1-2.4,0-3.5a1.4,1.4,0,0,1,1.5-1.6Z" transform="translate(-288.2 -410.8)" fill="#ffffff"/><path d="M292.8,417.4h-2.9a1.4,1.4,0,0,1-1.6-1.6,18.2,18.2,0,0,1,0-3.3c0-1.1.5-1.7,1.5-1.7h6a1.4,1.4,0,0,1,1.6,1.6v3.4a1.4,1.4,0,0,1-1.6,1.6Z" transform="translate(-288.2 -410.8)" fill="#ffffff"/></svg>
                        </i>
                        <p>Inventory</p>
                    </a>
                </li>
            </ul>
        </nav>
        {{-- /.sidebar-menu --}}
        <div class="nav mt-4">
            <div class="nav-link nav-info">
                <div class="side-title">Bengkel</div>
                <div id="workshop_10">Bos Kedoya</div>
            </div>
        </div>
        <div class="nav mt-0">
            <div class="nav-link nav-info">
                <div class="side-title">SR / NIK</div>
                <div>
                    <div id="user_10">Rachmat</div>
                    <div id="user_20">12346789</div>
                </div>
            </div>
        </div>
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="/" class="nav-link">
                        <i class="nav-icon">
                            <svg width="18px" height="18px" viewBox="0 0 18 18"><title>mdi_exit_to_app</title><path d="M289.2,424.2h2v3.9h14V414.2H291.3v3.9h-2c0-1.4-.1-2.9,0-4.3a1.8,1.8,0,0,1,2-1.7h13.9a1.9,1.9,0,0,1,2,2.1c.1,4.5.1,9.1,0,13.6a1.9,1.9,0,0,1-2.2,2.2H291.5a1.9,1.9,0,0,1-2.2-2.2C289.2,426.7,289.2,425.5,289.2,424.2Z" transform="translate(-289.2 -412.1)" fill="#ffffff"/><path d="M302.5,421.2l-4.8,4.9-1.3-1.6,2.9-2.3h-10v-2h9.9l-3-2.5,1.4-1.4Z" transform="translate(-289.2 -412.1)" fill="#ffffff"/></svg>
                        </i>
                        <p>LOGOUT</p>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
    {{-- /.sidebar --}}
</aside>