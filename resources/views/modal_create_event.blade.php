<div id="modal-add-event" class="modal">
    <div class="modal-dialog modal-fullscreen">{{--modal-dialog-scrollable--}}
        <div class="modal-content model-style">
            <div class="container pt-5">
                <div class="modal-header mb-3">
                    <h3><i class="far fa-calendar-plus"></i>&nbsp;Create Event</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <ul class="nav nav-tabs mb-2" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home"
                                    type="button" role="tab" aria-controls="home" aria-selected="true">Step 1
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile"
                                    type="button" role="tab" aria-controls="profile" aria-selected="false">Step 2
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact"
                                    type="button" role="tab" aria-controls="contact" aria-selected="false">Step 3
                            </button>
                        </li>
                    </ul>

                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <div id="page-1">
                                <div>
                                    <strong>
                                        <i class="las la-signature text-primary"></i><strong
                                            class="text-danger">*</strong>Title
                                        (ar)
                                    </strong>
                                    <input
                                        class="rounded-md col-md-12 alert alert-secondary"
                                        id="title_ar" name="title_ar" type="text"
                                        placeholder="Arabic Title (Required)">
                                    <p id="title_error" class="alert alert-danger"
                                       style="display: none"></p>
                                </div>
                                <div>
                                    <strong>
                                        <i class="las la-signature text-primary"></i><strong
                                            class="text-danger">*</strong>Title
                                        (en)
                                    </strong>
                                    <input
                                        class="rounded-md col-md-12 alert alert-secondary"
                                        id="title_en" name="title_en" type="text"
                                        placeholder="English Title (Required)">
                                    <p id="description_error" class="alert alert-danger"
                                       style="display: none"></p>

                                </div>
                                <div>
                                    <strong>
                                        <i class="las la-signature text-primary"></i>Description (ar)
                                    </strong>
                                    <textarea rows="3" placeholder="Arabic Description (optional)"
                                              id="description_ar"
                                              name="description_ar"
                                              class="rounded-md col-md-12 alert alert-secondary"
                                              type="text"></textarea>
                                    <p id="description_error" class="alert alert-danger"
                                       style="display: none"></p>

                                </div>
                                <div>
                                    <strong>
                                        <i class="las la-signature text-primary"></i>Description (en)
                                    </strong>
                                    <textarea rows="3" placeholder="English Description (optional)"
                                              id="description_en"
                                              name="description_en"
                                              class="rounded-md col-md-12 alert alert-secondary"
                                              type="text"></textarea>
                                    <p id="description_error" class="alert alert-danger"
                                       style="display: none"></p>

                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <strong>
                                            <i class="las la-signature text-primary"></i><strong
                                                class="text-danger">*</strong>Start
                                        </strong>
                                        <input
                                            class="rounded-md col-md-12 alert alert-secondary"
                                            id="start" name="start" type="date"
                                            placeholder="Start (Required)">
                                        <p id="start_error" class="alert alert-danger"
                                           style="display: none"></p>
                                    </div>
                                    <div class="col-md-6">
                                        <strong>
                                            <i class="las la-signature text-primary"></i><strong
                                                class="text-danger">*</strong>End
                                        </strong>
                                        <input
                                            class="rounded-md col-md-12 alert alert-secondary"
                                            id="end" name="end" type="date"
                                            placeholder="End (Required)">
                                        <p id="start_error" class="alert alert-danger"
                                           style="display: none"></p>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <div id="page-2">
                                <div>
                                    <strong>
                                        <i class="las la-signature text-primary"></i><strong
                                            class="text-danger">*</strong>Titlessssss
                                        (ar)
                                    </strong>
                                    <input
                                        class="rounded-md col-md-12 alert alert-secondary"
                                        id="title_ar" name="title_ar" type="text"
                                        placeholder="Arabic Title (Required)">
                                    <p id="title_error" class="alert alert-danger"
                                       style="display: none"></p>
                                </div>
                                <div>
                                    <strong>
                                        <i class="las la-signature text-primary"></i><strong
                                            class="text-danger">*</strong>Title
                                        (en)
                                    </strong>
                                    <input
                                        class="rounded-md col-md-12 alert alert-secondary"
                                        id="title_en" name="title_en" type="text"
                                        placeholder="English Title (Required)">
                                    <p id="description_error" class="alert alert-danger"
                                       style="display: none"></p>

                                </div>
                                <div>
                                    <strong>
                                        <i class="las la-signature text-primary"></i>Description (ar)
                                    </strong>
                                    <textarea rows="3" placeholder="Arabic Description (optional)"
                                              id="description_ar"
                                              name="description_ar"
                                              class="rounded-md col-md-12 alert alert-secondary"
                                              type="text"></textarea>
                                    <p id="description_error" class="alert alert-danger"
                                       style="display: none"></p>

                                </div>
                                <div>
                                    <strong>
                                        <i class="las la-signature text-primary"></i>Description (en)
                                    </strong>
                                    <textarea rows="3" placeholder="English Description (optional)"
                                              id="description_en"
                                              name="description_en"
                                              class="rounded-md col-md-12 alert alert-secondary"
                                              type="text"></textarea>
                                    <p id="description_error" class="alert alert-danger"
                                       style="display: none"></p>

                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <strong>
                                            <i class="las la-signature text-primary"></i><strong
                                                class="text-danger">*</strong>Start
                                        </strong>
                                        <input
                                            class="rounded-md col-md-12 alert alert-secondary"
                                            id="start" name="start" type="date"
                                            placeholder="Start (Required)">
                                        <p id="start_error" class="alert alert-danger"
                                           style="display: none"></p>
                                    </div>
                                    <div class="col-md-6">
                                        <strong>
                                            <i class="las la-signature text-primary"></i><strong
                                                class="text-danger">*</strong>End
                                        </strong>
                                        <input
                                            class="rounded-md col-md-12 alert alert-secondary"
                                            id="end" name="end" type="date"
                                            placeholder="End (Required)">
                                        <p id="start_error" class="alert alert-danger"
                                           style="display: none"></p>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                            <div id="page-3">
                                <div>
                                    <strong>
                                        <i class="las la-signature text-primary"></i><strong
                                            class="text-danger">*</strong>Title
                                        (ar)
                                    </strong>
                                    <input
                                        class="rounded-md col-md-12 alert alert-secondary"
                                        id="title_ar" name="title_ar" type="text"
                                        placeholder="Arabic Title (Required)">
                                    <p id="title_error" class="alert alert-danger"
                                       style="display: none"></p>
                                </div>
                                <div>
                                    <strong>
                                        <i class="las la-signature text-primary"></i><strong
                                            class="text-danger">*</strong>Title
                                        (en)
                                    </strong>
                                    <input
                                        class="rounded-md col-md-12 alert alert-secondary"
                                        id="title_en" name="title_en" type="text"
                                        placeholder="English Title (Required)">
                                    <p id="description_error" class="alert alert-danger"
                                       style="display: none"></p>

                                </div>
                                <div>
                                    <strong>
                                        <i class="las la-signature text-primary"></i>Description (ar)
                                    </strong>
                                    <textarea rows="3" placeholder="Arabic Description (optional)"
                                              id="description_ar"
                                              name="description_ar"
                                              class="rounded-md col-md-12 alert alert-secondary"
                                              type="text"></textarea>
                                    <p id="description_error" class="alert alert-danger"
                                       style="display: none"></p>

                                </div>
                                <div>
                                    <strong>
                                        <i class="las la-signature text-primary"></i>Description (en)
                                    </strong>
                                    <textarea rows="3" placeholder="English Description (optional)"
                                              id="description_en"
                                              name="description_en"
                                              class="rounded-md col-md-12 alert alert-secondary"
                                              type="text"></textarea>
                                    <p id="description_error" class="alert alert-danger"
                                       style="display: none"></p>

                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <strong>
                                            <i class="las la-signature text-primary"></i><strong
                                                class="text-danger">*</strong>Start
                                        </strong>
                                        <input
                                            class="rounded-md col-md-12 alert alert-secondary"
                                            id="start" name="start" type="date"
                                            placeholder="Start (Required)">
                                        <p id="start_error" class="alert alert-danger"
                                           style="display: none"></p>
                                    </div>
                                    <div class="col-md-6">
                                        <strong>
                                            <i class="las la-signature text-primary"></i><strong
                                                class="text-danger">*</strong>End
                                        </strong>
                                        <input
                                            class="rounded-md col-md-12 alert alert-secondary"
                                            id="end" name="end" type="date"
                                            placeholder="End (Required)">
                                        <p id="start_error" class="alert alert-danger"
                                           style="display: none"></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button id="create_event" class="btn btn-primary float-end" data-bs-dismiss="modal">CREATE</button>
                </div>
            </div>

        </div>
    </div>
</div>
