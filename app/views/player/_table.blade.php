@if(count($players))
    <table class="table table-hover">
        <thead>
            <tr>
                <th>Screen name</th>
                <th>Name</th>
                <th>Country</th>
            </tr>
        </thead>
        <tbody>
            @foreach($players as $player)
                <tr>
                    <td>{{ link_to_route('player.show', $player->name, $player->slug) }}</td>
                    <td>{{{ $player->fullName }}}</td>
                    <td>{{ Countries::getOne($player->country, 'en', 'icu') }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    @if(method_exists($players, 'links'))
        {{ $players->links() }}
    @endif
@else
    No player records.
@endif