<div id="notifPopup"
     class="hidden absolute right-6 mt-20 bg-white shadow-xl rounded-lg p-4 w-72 z-50 border border-teal-100">

    @forelse ($notifications as $n)
        <div class="p-3 border-b last:border-b-0 hover:bg-teal-50 cursor-pointer"
             onclick="markAsRead('{{ $n->id }}')"
             id="notification-{{ $n->id }}">
            
            <p class="text-sm text-teal-900">
                {{ $n->data['message'] ?? 'Nova notificação' }}
            </p>

            @if(!$n->read_at)
                <span class="text-xs text-red-500">Por ler</span>
            @else
                <span class="text-xs text-green-600">Lida</span>
            @endif
        </div>
    @empty
        <p class="text-center text-teal-600 py-2 text-sm">
            Sem notificações.
        </p>
    @endforelse

</div>
