<div class="table-wrapper table-responsive">
    <table class="table">
        <thead>
            <tr>
                <th>
                    <h6>Student ID</h6>
                </th>
                <th>
                    <h6>Student Name</h6>
                </th>
                <th>
                    <h6>Course Title</h6>
                </th>
                <th>
                    <h6>Course Completetion Date</h6>
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
            @foreach ($certifications as $certification)
                <tr>
                    <td class="min-width">
                        <p>{{ $certification->student_id }}</p>
                    </td>
                    <td class="min-width">
                        <p>{{ $certification->name }}</p>
                    </td>
                    <td class="min-width">
                        <p>{{ $certification->course_title }}</p>
                    </td>
                    <td class="min-width">
                        <p>{{ $certification->completion_date }}</p>
                    </td>
                    <td class="min-width">
                        @if ($certification->status == 0)
                            <span class="status-btn close-btn">Inactive</span>
                        @else
                            <span class="status-btn active-btn">Active</span>
                        @endif
                    </td>

                    <td>
                        <div class="action">
                            <a href="{{ route('certification.edit', $certification->id) }}">
                                <i class="lni lni-pencil-alt"></i>
                            </a>
                            <form method="POST" action="{{ route('certification.destroy', $certification->id) }}">
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
