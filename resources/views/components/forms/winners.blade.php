<div class="flex justify-center flex-col xl:flex-row">
    @foreach ($prizes as $prize)
        <div class="bg-cookie-cinereous p-8 m-8 self-center">
        <div class="text-center font-bold text-lg p-2">{{$prize->name}}</div>
        <div class="text-center p-2">{{$prize->description}}</div>
        <table class="table-auto border-solid outline border-black">
            <thead class="p-2">
                <tr class="p-2">
                    <th scope="col" class="p-2">Imię i Nazwisko</th>
                    <th scope="col" class="p-2">Sklep</th>
                </tr>
            </thead>
            <tbody class="p-2">
            @foreach ($winners as $winner)
                @if($winner->prize_id == $prize->id)
                <tr class="p-2">
                    <td class="p-2">{{$winner->participant_name}}</td>
                    <td class="p-2">{{$winner->store->name}}</td>
                </tr>
                @endif
            @endforeach
            </tbody>
        </table>
    </div>
    @endforeach
</div>