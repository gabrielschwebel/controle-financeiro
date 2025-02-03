<div class="overflow-x-auto">
    <table class="min-w-full table-auto">
        <thead>
            <tr class="bg-slate-400	text-left text-sm font-semibold text-slate-50 uppercase px-1">

                @if (isset($header))
                    {{$header}}
                @endif
                
            </tr>
        </thead>
        <tbody class="text-slate-500 font-semibold">
            @if (isset($rows))
                    {{$rows}}
            @endif
            
        </tbody>
    </table>
</div>
