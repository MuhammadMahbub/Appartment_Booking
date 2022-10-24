@foreach ($testimonials as $test)
    <tr>
        <td>
            <div class="custom-control custom-checkbox">
                <input type="checkbox" name="check[]" class="custom-control-input single_select_checkbox" id="single_select_checkbox-{{ $test->id }}">
                <label class="custom-control-label" for="single_select_checkbox-{{ $test->id }}"></label>
            </div>
        </td>
        <td>
            <div class="dropdown">
                <button type="button" class="btn btn-icon btn-outline-secondary waves-effect dropdown-toggle hide-arrow" data-toggle="dropdown">
                    <i data-feather="more-vertical"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" data-toggle="modal" data-target="#testimonialEdit{{ $test->id }}" title="Edit">
                        <i data-feather='edit'></i>
                        <span>{{ __('Edit') }}</span>
                    </a>

                    <a class="dropdown-item" data-toggle="modal" data-target="#testimonialDelete{{ $test->id }}" title="Delete">
                        <i data-feather="trash" class="mr-50"></i>
                        <span>{{ __('Delete') }}</span>
                    </a>
                </div>
            </div>
        </td>
        <td>{{ $loop->index + 1 }}</td>
        <td>{{ $test->name }}</td>
        <td>{{ $test->designation }}</td>
        <td>{!! $test->description !!}</td>
        <td>
            <img src="{{ asset('uploads/testimonials') }}/{{ $test->image }}" alt="Testimonial Image" width="150">
        </td>
        <td>{{ $test->createdBy->name ?? "-"}}</td>
        <td>{{ $test->updatedBy->name ?? "-" }}</td>
        <td>{{ $test->created_at->format('d-M-Y') }}</td>

    </tr>

    @push('all_modals')
        <!-- Single Edit Modal -->
        <div class="modal fade" id="testimonialEdit{{ $test->id }}" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title"> {{ __('Testimonial Update') }} </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="{{ route('testimonial.update', $test->id) }}" method="POST" enctype="multipart/form-data">
                        <div class="modal-body">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="name_edit"> {{ __('Name') }} <span class="text-danger">*</span> </label>
                                <input type="text" id="name_edit" class="form-control" name="name_edit" value="{{ $test->name }}" />
                            </div>
                            @error('name_edit')
                            <div class="alert alert-danger" role="alert">
                                <div class="alert-body">
                                    {{ $message }}
                                </div>
                            </div>
                            @enderror
                            <div class="form-group">
                                <label for="designation_edit"> {{ __('Designation') }} <span class="text-danger">*</span> </label>
                                <input type="text" id="designation_edit" class="form-control" name="designation_edit" value="{{ $test->designation }}" />
                            </div>
                            @error('designation_edit')
                            <div class="alert alert-danger" role="alert">
                                <div class="alert-body">
                                    {{ $message }}
                                </div>
                            </div>
                            @enderror

                            <div class="form-group">
                                <label for="description_edit"> {{ __('Description') }} <span class="text-danger">*</span> </label>
                                <textarea name="description_edit" id="description_edit" cols="30" rows="5" class="form-control">{{ $test->description }}</textarea>
                            </div>
                            @error('description_edit')
                            <div class="alert alert-danger" role="alert">
                                <div class="alert-body">
                                    {{ $message }}
                                </div>
                            </div>
                            @enderror

                            <div class="form-group">
                                <label for="">Previous Photo</label>
                                <img src="{{ asset('uploads/testimonials') }}/{{ $test->image }}" alt="">
                            </div>
                            <div class="form-group">
                                <label for="image_edit"> {{ __('Choose Photo') }}</label>
                                <div class="custom-file">
                                    <input type="file" name="image_edit" id="image_edit" class="custom-file-input">
                                    <label class="custom-file-label" for="importtestimonial">{{ __('Choose Image') }}</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="image_edit"> {{ __('Preview Photo') }} </label>
                                <img width="200" id="output_edit">
                            </div>

                            <div class="text-right">
                                <button type="submit" class="btn btn-primary mr-1">{{ __('Update') }}</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Single Delete Modal -->
        <div class="modal fade" id="testimonialDelete{{ $test->id }}" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <form action="{{ route('testimonial.destroy', $test->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('delete')
                        <div class="modal-body text-center">
                            <svg xmlns="http://www.w3.org/2000/svg" style="font-size: 100px" width="1em" height="1em" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-alert-circle text-danger">
                                <circle cx="12" cy="12" r="10"></circle>
                                <line x1="12" y1="8" x2="12" y2="12"></line>
                                <line x1="12" y1="16" x2="12.01" y2="16"></line>
                            </svg>
                            <h2 class="font-weight-normal mt-1">{{ __('Are you sure') }}?</h2>
                            <h4 class="font-weight-light mb-0">{{ __("You won't be able to revert this!") }}</h4>
                        </div>
                        <div class="modal-footer border-top-0 justify-content-center">
                            <button type="button" class="btn btn-outline-secondary waves-effect" data-dismiss="modal">
                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
                                    <line x1="18" y1="6" x2="6" y2="18"></line>
                                    <line x1="6" y1="6" x2="18" y2="18"></line>
                                </svg>
                                {{ __('Close') }}
                            </button>
                            <button class="btn btn-danger waves-effect waves-float waves-light">
                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2">
                                    <polyline points="3 6 5 6 21 6"></polyline>
                                    <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                    <line x1="10" y1="11" x2="10" y2="17"></line>
                                    <line x1="14" y1="11" x2="14" y2="17"></line>
                                </svg>
                                {{ __('Delete') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endpush

@endforeach
