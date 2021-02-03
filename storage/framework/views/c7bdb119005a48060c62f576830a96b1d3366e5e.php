
<div class="content-wrapper">
    
    <div class="content-header">
        <div class="container-fluid">
            <div class="row my-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Dashboard</h1>
                </div>
                <div class="col-sm-6 title-right">
                    <?php echo e(date('d ') . month_indo(date('m'), 'mmm') . date(' Y - H:m')); ?>

                </div>
            </div>
        </div>
        
    </div>
    

    
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-header border-0">
                            <div class="d-flex justify-content-between">
                                <h3 class="card-title medium-text">Fast Moving</h3>
                                <span class="thin-text">Last Update : 7 Januari 2021</span>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row my-3">
                                <div class="col text-center">
                                    <input id="fast_knob" type="text" class="knob" value="0" data-fgColor="#58BFA0">
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-header border-0">
                            <div class="d-flex justify-content-between">
                                <h3 class="card-title medium-text">Medium Moving</h3>
                                <span class="thin-text">Last Update : 7 Januari 2021</span>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row my-3">
                                <div class="col text-center">
                                    <input id="medium_knob" type="text" class="knob" value="45" data-fgColor="#EC9023">
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-header border-0">
                            <div class="d-flex justify-content-between">
                                <h3 class="card-title medium-text">Slow Moving</h3>
                                <span class="thin-text">Last Update : 7 Januari 2021</span>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row my-3">
                                <div class="col text-center">
                                    <input id="slow_knob" type="text" class="knob" value="20" data-fgColor="#FC8787">
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
            
            <div class="row" id="content-table">
                <div class="col-lg-12 mt-2 mb-4 d-flex align-items-lg-center">
                    <span class="medium-text text-bold">INVENTORY LIST</span>
                    <span class="ml-4 thin-text">Last Update : 7 Januari 2021</span>
                </div>
                <div class="col-lg-12">
                    <table id="table_inventory" class="table table-hover dataTable table-510">
                        <thead>
                            <tr>
                                <th>
                                    <div class="title-head">
                                        <span>Alarm</span>
                                        <i class="filter-icon">
                                            <svg width="10px" height="10px" viewBox="0 0 4.9 10.5"><title>ico_sort</title><path d="M298.2,426.4l-2.4-2.5h1.7v-8H299v8h1.7Z" transform="translate(-295.8 -415.9)" fill="#ffffff"/></svg>
                                        </i>
                                    </div>
                                    <div class="search-area alarm">
                                        <select class="alarm-select" name="alarm" id="alarm">
                                            <option value="" selected></option>
                                            <option value="">Red</option>
                                            <option value="">Orange</option>
                                            <option value="">Green</option>
                                        </select>
                                    </div>
                                </th>
                                <th>
                                    <div class="title-head">
                                        <span>Status Moving</span>
                                        <i class="filter-icon">
                                            <svg width="10px" height="10px" viewBox="0 0 4.9 10.5"><title>ico_sort</title><path d="M298.2,426.4l-2.4-2.5h1.7v-8H299v8h1.7Z" transform="translate(-295.8 -415.9)" fill="#ffffff"/></svg>
                                        </i>
                                    </div>
                                    <div class="search-area">
                                        <input class="input" type="text">
                                        <i class="input-icon">
                                            <svg width="13px" height="13px" viewBox="0 0 11.5 11.5"><title>mdi_search</title><path d="M292.4,419.7a4.4,4.4,0,0,1,2.7-4.1,4.4,4.4,0,0,1,5.6,5.8c-.4.7-.4,1.1.4,1.6a18.8,18.8,0,0,1,2.5,2.4c.4.4.4.7,0,1s-.6.6-1,.2a16.4,16.4,0,0,1-2.6-2.7c-.5-.9-.9-.6-1.4-.3A4.4,4.4,0,0,1,292.4,419.7Zm7.3,0a3.1,3.1,0,0,0-2.9-3.1,3.1,3.1,0,0,0-3,3,3,3,0,0,0,2.9,3A3.1,3.1,0,0,0,299.7,419.7Z" transform="translate(-292.4 -415.3)" fill="#c6c6c6"/></svg>
                                        </i>
                                    </div>
                                </th>
                                <th>
                                    <div class="title-head">
                                        <span>No SKU</span>
                                        <i class="filter-icon">
                                            <svg width="10px" height="10px" viewBox="0 0 4.9 10.5"><title>ico_sort</title><path d="M298.2,426.4l-2.4-2.5h1.7v-8H299v8h1.7Z" transform="translate(-295.8 -415.9)" fill="#ffffff"/></svg>
                                        </i>
                                    </div>
                                    <div class="search-area">
                                        <input class="input" type="text">
                                        <i class="input-icon">
                                            <svg width="13px" height="13px" viewBox="0 0 11.5 11.5"><title>mdi_search</title><path d="M292.4,419.7a4.4,4.4,0,0,1,2.7-4.1,4.4,4.4,0,0,1,5.6,5.8c-.4.7-.4,1.1.4,1.6a18.8,18.8,0,0,1,2.5,2.4c.4.4.4.7,0,1s-.6.6-1,.2a16.4,16.4,0,0,1-2.6-2.7c-.5-.9-.9-.6-1.4-.3A4.4,4.4,0,0,1,292.4,419.7Zm7.3,0a3.1,3.1,0,0,0-2.9-3.1,3.1,3.1,0,0,0-3,3,3,3,0,0,0,2.9,3A3.1,3.1,0,0,0,299.7,419.7Z" transform="translate(-292.4 -415.3)" fill="#c6c6c6"/></svg>
                                        </i>
                                    </div>
                                </th>
                                <th>
                                    <div class="title-head">
                                        <span>Kategori</span>
                                        <i class="filter-icon">
                                            <svg width="10px" height="10px" viewBox="0 0 4.9 10.5"><title>ico_sort</title><path d="M298.2,426.4l-2.4-2.5h1.7v-8H299v8h1.7Z" transform="translate(-295.8 -415.9)" fill="#ffffff"/></svg>
                                        </i>
                                    </div>
                                    <div class="search-area">
                                        <input class="input" type="text">
                                        <i class="input-icon">
                                            <svg width="13px" height="13px" viewBox="0 0 11.5 11.5"><title>mdi_search</title><path d="M292.4,419.7a4.4,4.4,0,0,1,2.7-4.1,4.4,4.4,0,0,1,5.6,5.8c-.4.7-.4,1.1.4,1.6a18.8,18.8,0,0,1,2.5,2.4c.4.4.4.7,0,1s-.6.6-1,.2a16.4,16.4,0,0,1-2.6-2.7c-.5-.9-.9-.6-1.4-.3A4.4,4.4,0,0,1,292.4,419.7Zm7.3,0a3.1,3.1,0,0,0-2.9-3.1,3.1,3.1,0,0,0-3,3,3,3,0,0,0,2.9,3A3.1,3.1,0,0,0,299.7,419.7Z" transform="translate(-292.4 -415.3)" fill="#c6c6c6"/></svg>
                                        </i>
                                    </div>
                                </th>
                                <th>
                                    <div class="title-head">
                                        <span>Nama Item</span>
                                        <i class="filter-icon">
                                            <svg width="10px" height="10px" viewBox="0 0 4.9 10.5"><title>ico_sort</title><path d="M298.2,426.4l-2.4-2.5h1.7v-8H299v8h1.7Z" transform="translate(-295.8 -415.9)" fill="#ffffff"/></svg>
                                        </i>
                                    </div>
                                    <div class="search-area">
                                        <input class="input" type="text">
                                        <i class="input-icon">
                                            <svg width="13px" height="13px" viewBox="0 0 11.5 11.5"><title>mdi_search</title><path d="M292.4,419.7a4.4,4.4,0,0,1,2.7-4.1,4.4,4.4,0,0,1,5.6,5.8c-.4.7-.4,1.1.4,1.6a18.8,18.8,0,0,1,2.5,2.4c.4.4.4.7,0,1s-.6.6-1,.2a16.4,16.4,0,0,1-2.6-2.7c-.5-.9-.9-.6-1.4-.3A4.4,4.4,0,0,1,292.4,419.7Zm7.3,0a3.1,3.1,0,0,0-2.9-3.1,3.1,3.1,0,0,0-3,3,3,3,0,0,0,2.9,3A3.1,3.1,0,0,0,299.7,419.7Z" transform="translate(-292.4 -415.3)" fill="#c6c6c6"/></svg>
                                        </i>
                                    </div>
                                </th>
                                <th>
                                    <div class="title-head">
                                        <span>Demand</span>
                                        <i class="filter-icon">
                                            <svg width="10px" height="10px" viewBox="0 0 4.9 10.5"><title>ico_sort</title><path d="M298.2,426.4l-2.4-2.5h1.7v-8H299v8h1.7Z" transform="translate(-295.8 -415.9)" fill="#ffffff"/></svg>
                                        </i>
                                    </div>
                                    <div class="search-area">
                                        <input class="input" type="text">
                                        <i class="input-icon">
                                            <svg width="13px" height="13px" viewBox="0 0 11.5 11.5"><title>mdi_search</title><path d="M292.4,419.7a4.4,4.4,0,0,1,2.7-4.1,4.4,4.4,0,0,1,5.6,5.8c-.4.7-.4,1.1.4,1.6a18.8,18.8,0,0,1,2.5,2.4c.4.4.4.7,0,1s-.6.6-1,.2a16.4,16.4,0,0,1-2.6-2.7c-.5-.9-.9-.6-1.4-.3A4.4,4.4,0,0,1,292.4,419.7Zm7.3,0a3.1,3.1,0,0,0-2.9-3.1,3.1,3.1,0,0,0-3,3,3,3,0,0,0,2.9,3A3.1,3.1,0,0,0,299.7,419.7Z" transform="translate(-292.4 -415.3)" fill="#c6c6c6"/></svg>
                                        </i>
                                    </div>
                                </th>
                                <th>
                                    <div class="title-head">
                                        <span>Min</span>
                                        <i class="filter-icon">
                                            <svg width="10px" height="10px" viewBox="0 0 4.9 10.5"><title>ico_sort</title><path d="M298.2,426.4l-2.4-2.5h1.7v-8H299v8h1.7Z" transform="translate(-295.8 -415.9)" fill="#ffffff"/></svg>
                                        </i>
                                    </div>
                                    <div class="search-area">
                                        <input class="input" type="text">
                                        <i class="input-icon">
                                            <svg width="13px" height="13px" viewBox="0 0 11.5 11.5"><title>mdi_search</title><path d="M292.4,419.7a4.4,4.4,0,0,1,2.7-4.1,4.4,4.4,0,0,1,5.6,5.8c-.4.7-.4,1.1.4,1.6a18.8,18.8,0,0,1,2.5,2.4c.4.4.4.7,0,1s-.6.6-1,.2a16.4,16.4,0,0,1-2.6-2.7c-.5-.9-.9-.6-1.4-.3A4.4,4.4,0,0,1,292.4,419.7Zm7.3,0a3.1,3.1,0,0,0-2.9-3.1,3.1,3.1,0,0,0-3,3,3,3,0,0,0,2.9,3A3.1,3.1,0,0,0,299.7,419.7Z" transform="translate(-292.4 -415.3)" fill="#c6c6c6"/></svg>
                                        </i>
                                    </div>
                                </th>
                                <th>
                                    <div class="title-head">
                                        <span>Max</span>
                                        <i class="filter-icon">
                                            <svg width="10px" height="10px" viewBox="0 0 4.9 10.5"><title>ico_sort</title><path d="M298.2,426.4l-2.4-2.5h1.7v-8H299v8h1.7Z" transform="translate(-295.8 -415.9)" fill="#ffffff"/></svg>
                                        </i>
                                    </div>
                                    <div class="search-area">
                                        <input class="input" type="text">
                                        <i class="input-icon">
                                            <svg width="13px" height="13px" viewBox="0 0 11.5 11.5"><title>mdi_search</title><path d="M292.4,419.7a4.4,4.4,0,0,1,2.7-4.1,4.4,4.4,0,0,1,5.6,5.8c-.4.7-.4,1.1.4,1.6a18.8,18.8,0,0,1,2.5,2.4c.4.4.4.7,0,1s-.6.6-1,.2a16.4,16.4,0,0,1-2.6-2.7c-.5-.9-.9-.6-1.4-.3A4.4,4.4,0,0,1,292.4,419.7Zm7.3,0a3.1,3.1,0,0,0-2.9-3.1,3.1,3.1,0,0,0-3,3,3,3,0,0,0,2.9,3A3.1,3.1,0,0,0,299.7,419.7Z" transform="translate(-292.4 -415.3)" fill="#c6c6c6"/></svg>
                                        </i>
                                    </div>
                                </th>
                                <th>
                                    <div class="title-head">
                                        <span>Stock</span>
                                        <i class="filter-icon">
                                            <svg width="10px" height="10px" viewBox="0 0 4.9 10.5"><title>ico_sort</title><path d="M298.2,426.4l-2.4-2.5h1.7v-8H299v8h1.7Z" transform="translate(-295.8 -415.9)" fill="#ffffff"/></svg>
                                        </i>
                                    </div>
                                    <div class="search-area">
                                        <input class="input" type="text">
                                        <i class="input-icon">
                                            <svg width="13px" height="13px" viewBox="0 0 11.5 11.5"><title>mdi_search</title><path d="M292.4,419.7a4.4,4.4,0,0,1,2.7-4.1,4.4,4.4,0,0,1,5.6,5.8c-.4.7-.4,1.1.4,1.6a18.8,18.8,0,0,1,2.5,2.4c.4.4.4.7,0,1s-.6.6-1,.2a16.4,16.4,0,0,1-2.6-2.7c-.5-.9-.9-.6-1.4-.3A4.4,4.4,0,0,1,292.4,419.7Zm7.3,0a3.1,3.1,0,0,0-2.9-3.1,3.1,3.1,0,0,0-3,3,3,3,0,0,0,2.9,3A3.1,3.1,0,0,0,299.7,419.7Z" transform="translate(-292.4 -415.3)" fill="#c6c6c6"/></svg>
                                        </i>
                                    </div>
                                </th>
                                <th>
                                    <div class="title-head">
                                        <span>On Order</span>
                                        <i class="filter-icon">
                                            <svg width="10px" height="10px" viewBox="0 0 4.9 10.5"><title>ico_sort</title><path d="M298.2,426.4l-2.4-2.5h1.7v-8H299v8h1.7Z" transform="translate(-295.8 -415.9)" fill="#ffffff"/></svg>
                                        </i>
                                    </div>
                                    <div class="search-area">
                                        <input class="input" type="text">
                                        <i class="input-icon">
                                            <svg width="13px" height="13px" viewBox="0 0 11.5 11.5"><title>mdi_search</title><path d="M292.4,419.7a4.4,4.4,0,0,1,2.7-4.1,4.4,4.4,0,0,1,5.6,5.8c-.4.7-.4,1.1.4,1.6a18.8,18.8,0,0,1,2.5,2.4c.4.4.4.7,0,1s-.6.6-1,.2a16.4,16.4,0,0,1-2.6-2.7c-.5-.9-.9-.6-1.4-.3A4.4,4.4,0,0,1,292.4,419.7Zm7.3,0a3.1,3.1,0,0,0-2.9-3.1,3.1,3.1,0,0,0-3,3,3,3,0,0,0,2.9,3A3.1,3.1,0,0,0,299.7,419.7Z" transform="translate(-292.4 -415.3)" fill="#c6c6c6"/></svg>
                                        </i>
                                    </div>
                                </th>
                                <th>
                                    <div class="title-head">
                                        <span>Lead Time</span>
                                        <i class="filter-icon">
                                            <svg width="10px" height="10px" viewBox="0 0 4.9 10.5"><title>ico_sort</title><path d="M298.2,426.4l-2.4-2.5h1.7v-8H299v8h1.7Z" transform="translate(-295.8 -415.9)" fill="#ffffff"/></svg>
                                        </i>
                                    </div>
                                    <div class="search-area">
                                        <input class="input" type="text">
                                        <i class="input-icon">
                                            <svg width="13px" height="13px" viewBox="0 0 11.5 11.5"><title>mdi_search</title><path d="M292.4,419.7a4.4,4.4,0,0,1,2.7-4.1,4.4,4.4,0,0,1,5.6,5.8c-.4.7-.4,1.1.4,1.6a18.8,18.8,0,0,1,2.5,2.4c.4.4.4.7,0,1s-.6.6-1,.2a16.4,16.4,0,0,1-2.6-2.7c-.5-.9-.9-.6-1.4-.3A4.4,4.4,0,0,1,292.4,419.7Zm7.3,0a3.1,3.1,0,0,0-2.9-3.1,3.1,3.1,0,0,0-3,3,3,3,0,0,0,2.9,3A3.1,3.1,0,0,0,299.7,419.7Z" transform="translate(-292.4 -415.3)" fill="#c6c6c6"/></svg>
                                        </i>
                                    </div>
                                </th>
                                <th>
                                    <div class="title-head">
                                        <span>Sgt. Order</span>
                                        <i class="filter-icon">
                                            <svg width="10px" height="10px" viewBox="0 0 4.9 10.5"><title>ico_sort</title><path d="M298.2,426.4l-2.4-2.5h1.7v-8H299v8h1.7Z" transform="translate(-295.8 -415.9)" fill="#ffffff"/></svg>
                                        </i>
                                    </div>
                                    <div class="search-area">
                                        <input class="input" type="text">
                                        <i class="input-icon">
                                            <svg width="13px" height="13px" viewBox="0 0 11.5 11.5"><title>mdi_search</title><path d="M292.4,419.7a4.4,4.4,0,0,1,2.7-4.1,4.4,4.4,0,0,1,5.6,5.8c-.4.7-.4,1.1.4,1.6a18.8,18.8,0,0,1,2.5,2.4c.4.4.4.7,0,1s-.6.6-1,.2a16.4,16.4,0,0,1-2.6-2.7c-.5-.9-.9-.6-1.4-.3A4.4,4.4,0,0,1,292.4,419.7Zm7.3,0a3.1,3.1,0,0,0-2.9-3.1,3.1,3.1,0,0,0-3,3,3,3,0,0,0,2.9,3A3.1,3.1,0,0,0,299.7,419.7Z" transform="translate(-292.4 -415.3)" fill="#c6c6c6"/></svg>
                                        </i>
                                    </div>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td colspan="12">
                                    <div class="text-center">
                                        Loading
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            
            <div class="row">
                <div class="col-lg-12 mt-1 mb-4">
                    <div id="nav_table" class="justify-content-center d-flex nav-page-table">

                    </div>
                </div>
            </div>
            
        </div>
        
    </div>
    
</div>
<?php /**PATH C:\Program Files\xampp\htdocs\bos_web\resources\views/index/content.blade.php ENDPATH**/ ?>