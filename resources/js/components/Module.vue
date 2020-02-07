<template>

    <div>

        <breadcrumb></breadcrumb>


    <div class="panel panel-flat">
                        <div class="panel-heading">
                            <h5 class="panel-title">Page length options</h5>
                            <div class="heading-elements">
                                <ul class="icons-list">
                                    <li><a data-action="collapse"></a></li>
                                    <li><a data-action="reload"></a></li>
                                    <li><a data-action="close"></a></li>
                                </ul>
                            </div>
                        <a class="heading-elements-toggle"><i class="icon-menu"></i></a></div>

                        <div class="panel-body">
                            It is possible to easily customise the options shown in the length menu using the <code>lengthMenu</code> initialisation option. This parameter can take one of two forms: 1) A <code>1D</code> array of options which will be used for both the displayed option and the value; 2) A <code>2D</code> array in which the first array is used to define the value options and the second array the displayed options. The example below shows a 2D array being used to include a <code>"Show all"</code> records option.
                        </div>

                        <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper no-footer"><div class="datatable-header"><div id="DataTables_Table_0_filter" class="dataTables_filter"><label><span>Filter:</span> <input type="search" class="" placeholder="Type to filter..." aria-controls="DataTables_Table_0"></label></div><div class="dataTables_length" id="DataTables_Table_0_length"><label><span>Show:</span> <div class="select2-container" id="s2id_autogen1"><a href="javascript:void(0)" class="select2-choice" tabindex="-1">   <span class="select2-chosen" id="select2-chosen-2">10</span><abbr class="select2-search-choice-close"></abbr>   <span class="select2-arrow" role="presentation"><b role="presentation"></b></span></a><label for="s2id_autogen2" class="select2-offscreen"></label><input class="select2-focusser select2-offscreen" type="text" aria-haspopup="true" role="button" aria-labelledby="select2-chosen-2" id="s2id_autogen2"><div class="select2-drop select2-display-none">   <div class="select2-search select2-search-hidden select2-offscreen">       <label for="s2id_autogen2_search" class="select2-offscreen"></label>       <input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" class="select2-input" role="combobox" aria-expanded="true" aria-autocomplete="list" aria-owns="select2-results-2" id="s2id_autogen2_search" placeholder="">   </div>   <ul class="select2-results" role="listbox" id="select2-results-2">   </ul></div></div><select name="DataTables_Table_0_length" aria-controls="DataTables_Table_0" class="select2-offscreen" tabindex="-1" title=""><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="-1">All</option></select></label></div></div><div class="datatable-scroll"><table class="table datatable-show-all dataTable no-footer" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
                            <thead>
                                <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="First Name: activate to sort column descending">First Name</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Last Name: activate to sort column ascending">Last Name</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Job Title: activate to sort column ascending">Job Title</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="DOB: activate to sort column ascending">DOB</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending">Status</th><th class="text-center sorting_disabled" rowspan="1" colspan="1" style="width: 100px;" aria-label="Actions">Actions</th></tr>
                            </thead>
                            <tbody>
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                            <tr role="row" class="odd">
                                    <td class="sorting_1">Aura</td>
                                    <td>Hard</td>
                                    <td>Business Services Sales Representative</td>
                                    <td>19 Apr 1969</td>
                                    <td><span class="label label-danger">Suspended</span></td>
                                    <td class="text-center">
                                        <ul class="icons-list">
                                            <li class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                                    <i class="icon-menu9"></i>
                                                </a>

                                                <ul class="dropdown-menu dropdown-menu-right">
                                                    <li><a href="#"><i class="icon-file-pdf"></i> Export to .pdf</a></li>
                                                    <li><a href="#"><i class="icon-file-excel"></i> Export to .csv</a></li>
                                                    <li><a href="#"><i class="icon-file-word"></i> Export to .doc</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </td>
                                </tr><tr role="row" class="even">
                                    <td class="sorting_1">Chantal</td>
                                    <td><a href="#">Nailor</a></td>
                                    <td>Technical Services Librarian</td>
                                    <td>10 Jan 1980</td>
                                    <td><span class="label label-default">Inactive</span></td>
                                    <td class="text-center">
                                        <ul class="icons-list">
                                            <li class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                                    <i class="icon-menu9"></i>
                                                </a>

                                                <ul class="dropdown-menu dropdown-menu-right">
                                                    <li><a href="#"><i class="icon-file-pdf"></i> Export to .pdf</a></li>
                                                    <li><a href="#"><i class="icon-file-excel"></i> Export to .csv</a></li>
                                                    <li><a href="#"><i class="icon-file-word"></i> Export to .doc</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </td>
                                </tr><tr role="row" class="odd">
                                    <td class="sorting_1">Cicely</td>
                                    <td>Sigler</td>
                                    <td><a href="#">Senior Research Officer</a></td>
                                    <td>15 Mar 1960</td>
                                    <td><span class="label label-info">Pending</span></td>
                                    <td class="text-center">
                                        <ul class="icons-list">
                                            <li class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                                    <i class="icon-menu9"></i>
                                                </a>

                                                <ul class="dropdown-menu dropdown-menu-right">
                                                    <li><a href="#"><i class="icon-file-pdf"></i> Export to .pdf</a></li>
                                                    <li><a href="#"><i class="icon-file-excel"></i> Export to .csv</a></li>
                                                    <li><a href="#"><i class="icon-file-word"></i> Export to .doc</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </td>
                                </tr><tr role="row" class="even">
                                    <td class="sorting_1">Coy</td>
                                    <td>Wollard</td>
                                    <td>Customer Service Operator</td>
                                    <td>12 Oct 1982</td>
                                    <td><span class="label label-success">Active</span></td>
                                    <td class="text-center">
                                        <ul class="icons-list">
                                            <li class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                                    <i class="icon-menu9"></i>
                                                </a>

                                                <ul class="dropdown-menu dropdown-menu-right">
                                                    <li><a href="#"><i class="icon-file-pdf"></i> Export to .pdf</a></li>
                                                    <li><a href="#"><i class="icon-file-excel"></i> Export to .csv</a></li>
                                                    <li><a href="#"><i class="icon-file-word"></i> Export to .doc</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </td>
                                </tr><tr role="row" class="odd">
                                    <td class="sorting_1">Delma</td>
                                    <td>Bonds</td>
                                    <td>Lead Brand Manager</td>
                                    <td>21 Dec 1968</td>
                                    <td><span class="label label-info">Pending</span></td>
                                    <td class="text-center">
                                        <ul class="icons-list">
                                            <li class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                                    <i class="icon-menu9"></i>
                                                </a>

                                                <ul class="dropdown-menu dropdown-menu-right">
                                                    <li><a href="#"><i class="icon-file-pdf"></i> Export to .pdf</a></li>
                                                    <li><a href="#"><i class="icon-file-excel"></i> Export to .csv</a></li>
                                                    <li><a href="#"><i class="icon-file-word"></i> Export to .doc</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </td>
                                </tr><tr role="row" class="even">
                                    <td class="sorting_1">Jackelyn</td>
                                    <td>Weible</td>
                                    <td><a href="#">Airline Transport Pilot</a></td>
                                    <td>3 Oct 1981</td>
                                    <td><span class="label label-default">Inactive</span></td>
                                    <td class="text-center">
                                        <ul class="icons-list">
                                            <li class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                                    <i class="icon-menu9"></i>
                                                </a>

                                                <ul class="dropdown-menu dropdown-menu-right">
                                                    <li><a href="#"><i class="icon-file-pdf"></i> Export to .pdf</a></li>
                                                    <li><a href="#"><i class="icon-file-excel"></i> Export to .csv</a></li>
                                                    <li><a href="#"><i class="icon-file-word"></i> Export to .doc</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </td>
                                </tr><tr role="row" class="odd">
                                    <td class="sorting_1">Kennedy</td>
                                    <td>Haley</td>
                                    <td>Senior Marketing Designer</td>
                                    <td>18 Dec 1960</td>
                                    <td><span class="label label-success">Active</span></td>
                                    <td class="text-center">
                                        <ul class="icons-list">
                                            <li class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                                    <i class="icon-menu9"></i>
                                                </a>

                                                <ul class="dropdown-menu dropdown-menu-right">
                                                    <li><a href="#"><i class="icon-file-pdf"></i> Export to .pdf</a></li>
                                                    <li><a href="#"><i class="icon-file-excel"></i> Export to .csv</a></li>
                                                    <li><a href="#"><i class="icon-file-word"></i> Export to .doc</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </td>
                                </tr><tr role="row" class="even">
                                    <td class="sorting_1">Lizzee</td>
                                    <td><a href="#">Goodlow</a></td>
                                    <td>Technical Services Librarian</td>
                                    <td>1 Nov 1961</td>
                                    <td><span class="label label-danger">Suspended</span></td>
                                    <td class="text-center">
                                        <ul class="icons-list">
                                            <li class="dropdown dropup">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                                    <i class="icon-menu9"></i>
                                                </a>

                                                <ul class="dropdown-menu dropdown-menu-right">
                                                    <li><a href="#"><i class="icon-file-pdf"></i> Export to .pdf</a></li>
                                                    <li><a href="#"><i class="icon-file-excel"></i> Export to .csv</a></li>
                                                    <li><a href="#"><i class="icon-file-word"></i> Export to .doc</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </td>
                                </tr><tr role="row" class="odd">
                                    <td class="sorting_1">Marth</td>
                                    <td><a href="#">Enright</a></td>
                                    <td>Traffic Court Referee</td>
                                    <td>22 Jun 1972</td>
                                    <td><span class="label label-success">Active</span></td>
                                    <td class="text-center">
                                        <ul class="icons-list">
                                            <li class="dropdown dropup">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                                    <i class="icon-menu9"></i>
                                                </a>

                                                <ul class="dropdown-menu dropdown-menu-right">
                                                    <li><a href="#"><i class="icon-file-pdf"></i> Export to .pdf</a></li>
                                                    <li><a href="#"><i class="icon-file-excel"></i> Export to .csv</a></li>
                                                    <li><a href="#"><i class="icon-file-word"></i> Export to .doc</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </td>
                                </tr><tr role="row" class="even">
                                    <td class="sorting_1">Maxine</td>
                                    <td><a href="#">Woldt</a></td>
                                    <td><a href="#">Business Services Sales Representative</a></td>
                                    <td>17 Oct 1987</td>
                                    <td><span class="label label-info">Pending</span></td>
                                    <td class="text-center">
                                        <ul class="icons-list">
                                            <li class="dropdown dropup">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                                    <i class="icon-menu9"></i>
                                                </a>

                                                <ul class="dropdown-menu dropdown-menu-right">
                                                    <li><a href="#"><i class="icon-file-pdf"></i> Export to .pdf</a></li>
                                                    <li><a href="#"><i class="icon-file-excel"></i> Export to .csv</a></li>
                                                    <li><a href="#"><i class="icon-file-word"></i> Export to .doc</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </td>
                                </tr></tbody>
                        </table></div><div class="datatable-footer"><div class="dataTables_info" id="DataTables_Table_0_info" role="status" aria-live="polite">Showing 1 to 10 of 15 entries</div><div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate"><a class="paginate_button previous disabled" aria-controls="DataTables_Table_0" data-dt-idx="0" tabindex="0" id="DataTables_Table_0_previous">←</a><span><a class="paginate_button current" aria-controls="DataTables_Table_0" data-dt-idx="1" tabindex="0">1</a><a class="paginate_button " aria-controls="DataTables_Table_0" data-dt-idx="2" tabindex="0">2</a></span><a class="paginate_button next" aria-controls="DataTables_Table_0" data-dt-idx="3" tabindex="0" id="DataTables_Table_0_next">→</a></div></div></div>
                    </div>

    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script> 