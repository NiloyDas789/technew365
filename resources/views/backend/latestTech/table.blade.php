<div class="table-wrapper table-responsive">
    <table class="table">
        <thead>
            <tr>
                <th>
                    <h6>Image</h6>
                </th>
                <th>
                    <h6>Latest Technews Title</h6>
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
            @foreach ($latestTechs as $latestTech)
                <tr>
                    <td class="min-width">
                        <img height="50" width="50" class="rounded" src="{{ setImage($latestTech->image) }}" />
                    </td>
                    <td class="min-width">
                        <p>{{ $latestTech->title }}</p>
                    </td>
                    <td class="min-width">
                        @if ($latestTech->status == 0)
                            <span class="status-btn close-btn">Inactive</span>
                        @else
                            <span class="status-btn active-btn">Active</span>
                        @endif
                    </td>

                    <td>
                        <div class="action">
                            <a href="{{ route('latest-tech.edit', $latestTech->id) }}">
                                <i class="lni lni-pencil-alt"></i>
                            </a>
                            <form method="POST" action="{{ route('latest-tech.destroy', $latestTech->id) }}">
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
