<div class="table-wrapper table-responsive">
    <table class="table">
        <thead>
            <tr>
                <th>
                    <h6>Image</h6>
                </th>
                <th>
                    <h6>Title</h6>
                </th>
                <th>
                    <h6>Company Name</h6>
                </th>
                <th>
                    <h6>Designation</h6>
                </th>
                <th>
                    <h6>Status</h6>
                </th>
                <th>
                    <h6>Action</h6>
                </th>
            </tr>
            <!-- end table row-->
        </thead>
        <tbody>
            @foreach ($jobs as $job)
                <tr>
                    <td class="min-width">
                        <img height="50" width="50" class="rounded" src="{{ setImage($job->image) }}" />
                    </td>
                    <td class="min-width">
                        <p>{{ $job->title }}</p>
                    </td>
                    <td class="min-width">
                        <p>{{ $job->company_name }}</p>
                    </td>
                    <td class="min-width">
                        <p>{{ $job->designation }}</p>
                    </td>
                    <td class="min-width">
                        @if ($job->status == 0)
                            <span class="status-btn close-btn">Inactive</span>
                        @else
                            <span class="status-btn active-btn">Active</span>
                        @endif
                    </td>

                    <td>
                        <div class="action">
                            <a href="{{ route('job.edit', $job->id) }}">
                                <i class="lni lni-pencil-alt"></i>
                            </a>
                            <form method="POST" action="{{ route('job.destroy', $job->id) }}">
                                @csrf
                                <input name="_method" type="hidden" value="DELETE">
                                <button type="submit" class="text-danger ml-5"><i
                                        class="lni lni-trash-can"></i></button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
            <!-- end table row -->
        </tbody>
    </table>
    <!-- end table -->
</div>
