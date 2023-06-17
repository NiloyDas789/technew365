<div class="table-wrapper table-responsive">
    <table class="table">
        <thead>
            <tr>
                <th>
                    <h6>Image</h6>
                </th>
                <th>
                    <h6>Course Title</h6>
                </th>
                <th>
                    <h6>Total Class</h6>
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
            @foreach ($courses as $course)
                <tr>
                    <td class="min-width">
                        <img height="50" width="50" class="rounded" src="{{ setImage($course->image) }}" />
                    </td>
                    <td class="min-width">
                        <p>{{ $course->title }}</p>
                    </td>
                    <td class="min-width">
                        <p>{{ $course->total_class }}</p>
                    </td>
                    <td class="min-width">
                        @if ($course->status == 0)
                            <span class="status-btn close-btn">Inactive</span>
                        @else
                            <span class="status-btn active-btn">Active</span>
                        @endif
                    </td>

                    <td>
                        <div class="action">
                            <a href="{{ route('course.edit', $course->id) }}">
                                <i class="lni lni-pencil-alt"></i>
                            </a>
                            <form method="POST" action="{{ route('course.destroy', $course->id) }}">
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
