@extends('layouts.master')

@section('leftmenu')
    @include('partials.ui.part.left')
@endsection
@section('content')

        <article class="border rounded-1 bg-white body-content shadow-sm">
            <div class="p-5">
                <div>
                    <div>
                        @forelse($threads as $thread)
                            <div id="comment-1">
                                <div class="media mb-3">
                                    <div class="pr-2 mr-1">
                                        <a href="{{ route('profile', $thread->creator) }}">
                                            <img src="{{Auth::user()->avatar ?? Avatar::create($thread->creator->name)->setFontSize(50)->toBase64()}}"
                                                alt="{{ $thread->creator->name}}"
                                                width="45"
                                                height="45"
                                                class="align-self-start mt-2 rounded-circle img-thumbnail bg-white border-white absolute">
                                        </a>
                                    </div>
                                    <div class="media-body bg-light-header pl-3 pt-3 pr-3 ml-3 rounded-2 body-content">
                                        <a href="{{ $thread->path()}}">
                                            <strong class="font-weight-bold pl-2 mr-5 text-white">
                                                 {{ $thread->title }}
                                            </strong>
                                        </a>
                                        <div class="float-right media ">
                                            <svg viewBox="0 0 2091 2091" xmlns="http://www.w3.org/2000/svg" width="18" height="18" class="fill-current icon mr-2">
                                                <path d="M789.333 1152q0 53-37.5 90.5t-90.5 37.5-90.5-37.5-37.5-90.5 37.5-90.5 90.5-37.5 90.5 37.5 37.5 90.5zm384 0q0 53-37.5 90.5t-90.5 37.5-90.5-37.5-37.5-90.5 37.5-90.5 90.5-37.5 90.5 37.5 37.5 90.5zm384 0q0 53-37.5 90.5t-90.5 37.5-90.5-37.5-37.5-90.5 37.5-90.5 90.5-37.5 90.5 37.5 37.5 90.5zm-512-512q-204 0-381.5 69.5t-282 187.5-104.5 255q0 112 71.5 213.5t201.5 175.5l87 50-27 96q-24 91-70 172 152-63 275-171l43-38 57 6q69 8 130 8 204 0 381.5-69.5t282-187.5 104.5-255-104.5-255-282-187.5-381.5-69.5zm896 512q0 174-120 321.5t-326 233-450 85.5q-70 0-145-8-198 175-460 242-49 14-114 22h-5q-15 0-27-10.5t-16-27.5v-1q-3-4-.5-12t2-10 4.5-9.5l6-9 7-8.5 8-9q7-8 31-34.5t34.5-38 31-39.5 32.5-51 27-59 26-76q-157-89-247.5-220t-90.5-281q0-130 71-248.5t191-204.5 286-136.5 348-50.5 348 50.5 286 136.5 191 204.5 71 248.5z"/>
                                            </svg>
                                            <span class="mr-2 ">
                                                {{ $thread->replies_count }} {{ str_plural('comment', $thread->replies_count) }}
                                            </span>
                                            <a href="http://">
                                                <button type="button" class="btn btn-outline-light btn-sm">{{ $thread->channel->slug }}</button>
                                            </a>
                                        </div>

                                        <div class="mb-3" >
                                            <small class="ml-2">
                                                <a href="{{ route('profile', $thread->creator) }}">
                                                    <strong class="text-info">
                                                       {{ $thread->creator->name }}
                                                    </strong>
                                                </a>
                                                    Published
                                                <span>
                                                    {{ $thread->created_at->diffForHumans() }}
                                                </span>
                                            </small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @empty
                        <div class="d-flex flex-column align-items-center justify-content-center bottom-radius">
                            <svg class="position-relative position-md-absolute right-n8 right-lg-8 top-lg-3" width="240px" xmlns="http://www.w3.org/2000/svg"
                                 viewBox="0 0 518.6 406.73">
                                 <g data-name="Layer 2">
                                     <g id="Layer_5" data-name="Layer 5">
                                         <ellipse cx="383.17"
                                                  cy="369.46"
                                                  rx="135.42"
                                                  ry="16.07"
                                                  style="fill:#cacfd6">
                                         </ellipse>
                                         <path d="M37.2,399.86c0,2.37-5.37,3.88-11.75,4.2-.8,1.61-8,2.67-11,2.67C4.83,406.73,1,405,1,401.56s7.82-6.2,17.46-6.2S37.2,396.44,37.2,399.86Z" style="fill:#cacfd6"></path><path d="M143.92,281.81c1.81,9.57,6.21,49.92,6.47,56.9s8.53,9.05,14.74,7.76,12-8.33,12.4-11.38-14.89-45.84-15.83-51.72S143.92,281.81,143.92,281.81Z" style="fill:#ffd33d"></path><path d="M161.7,283.37a2.85,2.85,0,0,0-1.25-1.89c-3.72,7.66,3.41,23.7,4.1,30.94.5,5.19,3.64,7.34,4.91,11.94,1,3.66-.55,6.28.94,10a31.71,31.71,0,0,0,3.88,6.26c1.86-2.07,3.09-4.19,3.25-5.54C177.89,332,162.64,289.25,161.7,283.37Z" style="fill:#f9c513"></path><path d="M153.38,344.41a11.86,11.86,0,0,0,5,2.12c-.48-4.14-1-8.27-1.35-12.43-.64-7.93-2.45-14.05-4.37-21.63-2.28-9.06,1.28-22.79-5.76-29.84a2.45,2.45,0,0,1-.72-1.33l-.92.2C149.47,302.17,150.89,323.38,153.38,344.41Z" style="fill:#ffdf5d"></path><path d="M159,293a19.71,19.71,0,0,0,4.63-2.76,69.71,69.71,0,0,1-1.91-6.91c-.95-5.89-17.78-1.56-17.78-1.56.45,2.37,1.06,6.62,1.72,11.77C150,293.59,154.58,294.86,159,293Z" style="fill:#dbab09"></path><path d="M83.21,191.25c-1.41.23-10.64-3.83-14.89,12.37s19.51,51.52,43.93,66.81c24.66,15.43,40.79,19.51,46.48,15.73,5.1-8.31,4.88-14,4.88-14s-34-14.65-51.68-30.48C93.52,225.21,83.21,191.25,83.21,191.25Z" style="fill:#dbab09;stroke:#ffea7f;stroke-miterlimit:10;stroke-width:2.5px"></path><path d="M110.23,258.74c14.48,11.6,35.06,22.76,53.38,22.74,3.62-6.92,0-9.34,0-9.34s-34-14.65-51.68-30.48c-18.41-16.45-28.72-50.41-28.72-50.41-1,.17-6.12-1.9-10.47,3C70.82,220.26,91.37,243.62,110.23,258.74Z" style="fill:#b08800"></path><path d="M192.9,23.26s-57.09,34.68-50.3,91.31c6,49.64,36.15,66.44,46.89,77.58,3.08,6.49-.7,19.08,9.17,26.63s32.14,13.23,61.56.51,56.06-29.82,67.6-54.47" style="fill:none;stroke:#0366d6;stroke-miterlimit:10;stroke-width:3px"></path><path d="M202,52.3s-10.83-9.67-8.84-37.39a2.22,2.22,0,0,1,1.1-1.76c23.2-13.26,49-10.74,70.16,3.37" style="fill:none;stroke:#0366d6;stroke-miterlimit:10;stroke-width:3px"></path><path d="M236.06,5.22C262.59-4,309.23,1.88,337.36,46.34c24.65,39,14.43,77.55,8.32,98.32" style="fill:none;stroke:#0366d6;stroke-miterlimit:10;stroke-width:3px"></path><path d="M203.93,19.65s16.43,0,26.13,6.68c11.74,8.09,16.16,20.8,16.16,20.8" style="fill:none;stroke:#0366d6;stroke-miterlimit:10;stroke-width:3px"></path><path d="M148.76,74.46s-26.39,9.14-32.15,27.43c7,11.53,21.41,22,27.49,22.16" style="fill:none;stroke:#0366d6;stroke-miterlimit:10;stroke-width:3px"></path><path d="M142.48,113.44s3.61,19,22.59,17.05c28.31-7.16,29.24-57.72,68.06-56,37.09,1.62,42.8,51.75,47.11,65.77,3,9.78,16.49,8,22.51,11.73,10.11,6.35,10.11,29.3-8.74,49.35" style="fill:none;stroke:#0366d6;stroke-miterlimit:10;stroke-width:3px"></path><path d="M332.09,156.9s15,82.09,14.35,93.44" style="fill:none;stroke:#0366d6;stroke-miterlimit:10;stroke-width:3px"></path><path d="M370.63,245.84s-29.95-4.67-38.54,22.2,15.19,42.07,27.64,48.29c6.55,3.28,25.37,10.51,28.26,7.79,5.43-7.16-3.68-24.71-.59-42.84.78-4.54,6-13.45,6-17-13.88-42.95-40.28-125.12-59.87-129.63-7.52-1.73-5.66,16.81-5.66,16.81" style="fill:none;stroke:#0366d6;stroke-miterlimit:10;stroke-width:3px"></path><path d="M317,181.44s3.88,25.34,13.06,42.32,16.43,26.58,16.43,26.58" style="fill:none;stroke:#0366d6;stroke-miterlimit:10;stroke-width:3px"></path><path d="M321.17,176.08s7.46,25.2,13.42,34.37a145.35,145.35,0,0,1,9.29,16.36" style="fill:none;stroke:#0366d6;stroke-miterlimit:10;stroke-width:3px"></path><path d="M320.14,196.63s-1.83,42.27,2.64,49.62" style="fill:none;stroke:#0366d6;stroke-miterlimit:10;stroke-width:3px"></path><path d="M329.55,246.25s-26.16,1.83-27.53,26.61S317,301.31,317,301.31s-2.57,12.39,4.33,13.31,5.8-16.72,6.54-20.77a8.56,8.56,0,0,1,3.88-5.43" style="fill:none;stroke:#0366d6;stroke-miterlimit:10;stroke-width:3px"></path><path d="M371.09,199.22s29.15,15.41,56,23.24,28.14,23.45,28.78,31.15-4.43,27.15-44.56,50.17" style="fill:none;stroke:#0366d6;stroke-miterlimit:10;stroke-width:3px"></path><path d="M327.61,308s4.5,17.47,8,22.9" style="fill:none;stroke:#0366d6;stroke-miterlimit:10;stroke-width:3px"></path><path d="M359.73,316.33s5,21.14,9.64,27" style="fill:none;stroke:#0366d6;stroke-miterlimit:10;stroke-width:3px"></path><path d="M346.8,329.59a41.34,41.34,0,0,0-14.71,2.83s-16.35,6.6-19.23,27.95" style="fill:none;stroke:#0366d6;stroke-miterlimit:10;stroke-width:3px"></path><path d="M313.56,356.51s-13.67-2-14.45,3.86.47,8.93,22.17,10.1,28.29,0,28.29,0" style="fill:none;stroke:#0366d6;stroke-miterlimit:10;stroke-width:3px"></path><path d="M403.67,341.35a57.23,57.23,0,0,0-19.94-.39c-34.16,5.05-34.16,27.56-34.16,27.56s-5.69,7.77-.77,12.43a159,159,0,0,0,61.33,3.88c33-4.66,38-9.45,37.65-13.85s-7.93-5.9-7.93-5.9-2.4-10.22-19.23-40.36-11.41-44.27-11.41-44.27" style="fill:none;stroke:#0366d6;stroke-miterlimit:10;stroke-width:3px"></path><path d="M353.51,382.15s2.8-12.65,11-12.65,29.87,17.38,40.49,15.95" style="fill:none;stroke:#0366d6;stroke-miterlimit:10;stroke-width:3px"></path><path d="M309.49,189.18s-30.69,37.39-47.69,50.94c-15.05,12-60.2,33.28-84.27,32" style="fill:none;stroke:#0366d6;stroke-miterlimit:10;stroke-width:3px"></path><path d="M187.77,285.77s.78-8.41-10.24-13.69" style="fill:none;stroke:#0366d6;stroke-miterlimit:10;stroke-width:3px"></path><path d="M191.91,315.31c7.18-4.25,15.13-11.53,13.18-18.83-3.16-11.8-23.24-13.83-30.65-10.71-9.22,3.89-10.83,10.72-28.8,7.81" style="fill:none;stroke:#0366d6;stroke-miterlimit:10;stroke-width:3px"></path><path d="M127.16,280.45s-9.9,30.5,5.92,45.45c16.14,15.27,61.21,20.63,61.2-27.57" style="fill:none;stroke:#0366d6;stroke-miterlimit:10;stroke-width:3px"></path><path d="M175.32,198.57c5.76-.65,15.5-.65,15.5-.65" style="fill:none;stroke:#0366d6;stroke-miterlimit:10;stroke-width:3px"></path><line x1="180.45" y1="208.08" x2="190.82" y2="202.95" style="fill:none;stroke:#0366d6;stroke-miterlimit:10;stroke-width:3px"></line><path d="M295.63,139.3c7.55-12.7,22.25-31.34,32-37.48" style="fill:none;stroke:#0366d6;stroke-miterlimit:10;stroke-width:3px"></path><path d="M305.37,142.27c5.29-4.87,15.8-14.22,35.78-22.06" style="fill:none;stroke:#0366d6;stroke-miterlimit:10;stroke-width:3px"></path><path d="M186.69,325.8c51.66-20.24,113.43-76.49,134.25-123.21" style="fill:none;stroke:#0366d6;stroke-miterlimit:10;stroke-width:3px"></path><ellipse cx="237.8" cy="275.53" rx="27.12" ry="8.66" transform="translate(-117.06 194.69) rotate(-36.37)" style="fill:none;stroke:#0366d6;stroke-miterlimit:10;stroke-width:3px"></ellipse><ellipse cx="287" cy="234.24" rx="22.62" ry="5.51" transform="translate(-76.62 305.08) rotate(-50.24)" style="fill:none;stroke:#0366d6;stroke-miterlimit:10;stroke-width:3px"></ellipse><ellipse cx="211.18" cy="196.36" rx="6.49" ry="3.48" transform="translate(-26.64 33.29) rotate(-8.48)" style="fill:none;stroke:#0366d6;stroke-miterlimit:10;stroke-width:3px"></ellipse><path d="M81.8,191.48S77.29,216.79,106.89,247c17.77,18.13,38.66,26.73,55.18,28.42,2.36-10.8,8.36-32.57-41.26-70C98.2,188.35,81.8,191.48,81.8,191.48Z" style="fill:#79b8ff"></path><path d="M113.34,233.44a126.89,126.89,0,0,1-17.09-39.58,50.66,50.66,0,0,0-5.58-1.08c1,25,18.7,45.33,32.52,66.28,2.2,1.39,4.4,2.63,6.61,3.8A243.42,243.42,0,0,0,113.34,233.44Z" style="fill:#c8e1ff"></path><path d="M87.23,191.32a24.34,24.34,0,0,0-5.43.16s-4.51,25.3,25.09,55.51c1.29,1.32,2.61,2.57,3.93,3.79C99.22,232.1,87.16,213.47,87.23,191.32Z" style="fill:#2188ff"></path><path d="M153.93,254.73c-5-8.36-5.32-18.19-10.2-26.44-7.84-13.25-22.34-20-29.67-33.46-1.32-.49-2.61-.93-3.83-1.28,6.64,16,24.93,23.35,31.59,39.39,3.86,9.29,5.26,19,10.11,28a119.75,119.75,0,0,0,7.1,11.4c.9.29,1.78.54,2.67.8A87.18,87.18,0,0,0,153.93,254.73Z" style="fill:#daedff"></path><path d="M68.32,203.62l2.8-13.2L96.3,170.55s36.38-3.91,65.6,30.76c25.47,30.22,24.58,44.25,25.64,58,0,0-18.72,24.65-29.89,28.26,7.4-22,10.3-34.8-22.44-66.09S77.83,185.18,68.32,203.62Z" style="fill:#ffea7f"></path><path d="M178.75,225.08c.47,10.69,2.66,21.7-2.37,31.37-3.59,6.91-9.84,11.23-12.22,19-1.08,3.53-1.47,7.08-2.82,10.32,11.17-6.71,26.2-26.5,26.2-26.5C186.81,249.78,187,240.13,178.75,225.08Z" style="fill:#ffdf5d"></path><path d="M389.9,253.67s4.18-5.22,9.62-7.42" style="fill:none;stroke:#0366d6;stroke-miterlimit:10;stroke-width:3px"></path><path d="M159.4,221.29c-7.51-13-18.33-25.17-31.76-32.3s-29.35-9.27-44.5-8.05l-5.23,4.13a51.11,51.11,0,0,1,17.74-.36c9.76,1.31,20.25,4.38,28.34,10.19,11.72,8.42,20.29,20.47,29.33,31.5,8.06,9.83,14.91,21,16.74,33.83a74.77,74.77,0,0,1,0,18.67c2-1.84,3.91-3.81,5.74-5.78C173.39,255,168.53,237.16,159.4,221.29Z" style="fill:#fff5b1"></path><path d="M320.08,108a48.4,48.4,0,0,1,7.53-6.17" style="fill:none;stroke:#0366d6;stroke-linecap:round;stroke-miterlimit:10;stroke-width:3px"></path><path d="M330.79,124.79c3.38-1.68,6.85-3.2,10.36-4.58" style="fill:none;stroke:#0366d6;stroke-linecap:round;stroke-miterlimit:10;stroke-width:3px"></path><path d="M175.32,198.57c1.86-.2,3.72-.32,5.59-.41" style="fill:none;stroke:#0366d6;stroke-linecap:round;stroke-miterlimit:10;stroke-width:3px"></path><path d="M180.45,208.08l3.65-1.8" style="fill:none;stroke:#0366d6;stroke-linecap:round;stroke-miterlimit:10;stroke-width:3px"></path><ellipse cx="18.39" cy="393.7" rx="11.22" ry="6.17" style="fill:#0366d6"></ellipse><path d="M1,401.38c.45-3.84,5.43-5.54,9-5.53" style="fill:none;stroke:#0366d6;stroke-miterlimit:10;stroke-width:2px"></path><path d="M21.25,398.3s4.54.9,4.2,7" style="fill:none;stroke:#0366d6;stroke-miterlimit:10;stroke-width:2px"></path><path d="M26.67,395.36a10.33,10.33,0,0,1,5.14,1.7,7.12,7.12,0,0,1,3,4.74" style="fill:none;stroke:#0366d6;stroke-miterlimit:10;stroke-width:2px"></path><path d="M28.26,392.65s1.13-1.69,5.47-1.41a7.41,7.41,0,0,1,6.05,4.12" style="fill:none;stroke:#0366d6;stroke-miterlimit:10;stroke-width:2px"></path><path d="M2.93,393.7a9.52,9.52,0,0,1,4.24-3,13.51,13.51,0,0,1,5.8.2" style="fill:none;stroke:#0366d6;stroke-miterlimit:10;stroke-width:2px"></path><path d="M18.27,388.53s-1.53-2.08-3.58-1.7c-1.5.28-1.72,4-1.72,4" style="fill:none;stroke:#0366d6;stroke-miterlimit:10;stroke-width:2px"></path></g></g></svg>

                            <span class="text-muted">Ask a human</span>
                            <p class="font-weight-bold">Can't find what you're looking for?</p>
                        </div>
                        @endforelse
                    </div>
                </div>
            </div>
        </article>

@endsection