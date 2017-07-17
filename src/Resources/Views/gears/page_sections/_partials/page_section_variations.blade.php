@if(count($variations))
    @foreach($variations as $variation)
        <div id="viewType" class="col-xs-4">
            <div class="row templates m-b-10 ">
                <div class=" topRow p-l-0 p-r-0">
                    <img src="{!! url('resources/assets/images/template-3.png')!!}" class="img-responsive"/>
                    <div class="tempalte_icon">
                        <div><a href="{!! url('/admin/uploads/gears/page-sections/settings',$variation->id) !!}"
                                class="m-r-10"><i class="fa fa-pencil f-s-14"></i> </a></div>
                        @if($variation->active)
                            <div> <i style="color: green;" class="fa fa-check f-s-14"></i> </div>
                        @else
                            <div>
                                <a href="javascript:void(0)" class="m-r-10 make-active-section" data-slug="{!! $variation->id !!}" data-type="page_section_variation">
                                    <i class="fa fa-thumbs-up f-s-14"></i>
                                </a>
                            </div>
                        @endif
                        @if(count($variations)>1 && $currentPageSection->autoinclude_main != $variation->id)
                            <div>
                                <a data-href="{!! url('/admin/uploads/gears/page-sections/delete-variation') !!}" data-key="{!! $variation->id !!}" data-type="Page Section Variation"  class="delete-button addons-delete delete_layout">
                                    <i class="fa fa-trash-o f-s-14 "></i>
                                </a>
                            </div>
                        @endif
                    </div>
                </div>
                <div class=" templates-header ">
                    <span class=" templates-title text-center"><i class="fa fa-bars f-s-13 m-r-5"
                                                                  aria-hidden="true"></i> {!! $variation->title or $variation->id !!}</span>

                </div>
            </div>
        </div>

    @endforeach
@else
    <div class="col-xs-12 addon-item">
        NO Page Sections
    </div>
@endif