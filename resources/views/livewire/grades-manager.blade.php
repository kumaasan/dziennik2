<div class="flex flex-col gap-8 w-full">
    @foreach($subjects as $subject)
        <div class="flex lg:flex-row flex-col lg:gap-8 gap-4 w-full">
            <!-- Subject Info Section -->
            <div class="flex-[1.5] backdrop-blur-xl bg-white/5 border border-white/10 p-8 rounded-2xl hover:bg-white/10 transition-all duration-300">
                <div class="grid grid-cols-2 gap-5 w-full">
                    <div class="flex flex-col flex-wrap items-start justify-start gap-y-4">
                        <div class="text-white text-xl capitalize font-semibold">{{ $subject->name }}</div>
                        <div class="text-gray-300 text-lg flex gap-x-3 items-center">
                            Średnia:
                            <div class="font-bold text-2xl {{ auth()->user()->minimal_average < $subject->average ? 'text-emerald-400' : 'text-red-400' }}">
                                {{ number_format($subject->average, 2) }}
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-wrap items-center justify-start gap-2">
                        @foreach($grades[$subject->id] ?? [] as $grade)
                            <button
                                    onclick="showGradePopup({{$grade->id}}, {{ $grade->grade }}, {{ $grade->weight }}, '{{ $subject->name }}' )"
                                    class="rounded-full bg-white/10 border border-white/20 hover:bg-white/20 hover:border-white/30 hover:scale-110 px-4 py-2 text-white font-semibold transition-all duration-200 cursor-pointer shadow-lg">
                                {{ $grade->grade }}
                            </button>
                        @endforeach
                    </div>
                </div>
            </div>

            <!-- Add Grade Form Section -->
            <div class="flex-[1] backdrop-blur-xl bg-white/5 border border-white/10 p-8 rounded-2xl hover:bg-white/10 transition-all duration-300">
                <p class="text-xl text-center text-white font-semibold mb-6">Dodaj ocenę</p>
                <form wire:submit.prevent="addGrade({{ $subject->id }})" class="flex flex-col gap-5">
                    <div>
                        <label class="block text-sm font-medium mb-2 text-gray-300">Ocena</label>
                        <input
                                wire:model="grade"
                                type="number"
                                min="1"
                                max="6"
                                class="w-full px-4 py-3 border border-white/20 rounded-xl bg-white/5 text-white placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-blue-500/50 focus:border-blue-500/50 backdrop-blur-xl transition-all @error('grade') ring-2 ring-red-500/50 border-red-500/50 @enderror"
                                placeholder="Np: 5"
                        />
                        @error('grade') <p class="text-red-400 text-xs mt-2 flex items-center gap-1">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/>
                            </svg>
                            {{ $message }}
                        </p> @enderror
                    </div>

                    <div>
                        <label class="block text-sm font-medium mb-2 text-gray-300">Waga</label>
                        <input
                                wire:model="weight"
                                type="number"
                                min="1"
                                max="6"
                                class="w-full px-4 py-3 border border-white/20 rounded-xl bg-white/5 text-white placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-blue-500/50 focus:border-blue-500/50 backdrop-blur-xl transition-all @error('weight') ring-2 ring-red-500/50 border-red-500/50 @enderror"
                                placeholder="Np: 2"
                        />
                        @error('weight') <p class="text-red-400 text-xs mt-2 flex items-center gap-1">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/>
                            </svg>
                            {{ $message }}
                        </p> @enderror
                    </div>

                    <button
                            type="submit"
                            class="w-full bg-gradient-to-r from-blue-500 to-blue-600 hover:from-blue-600 hover:to-blue-700 text-white font-medium py-3 rounded-xl transition-all duration-200 shadow-lg shadow-blue-500/30 hover:shadow-xl hover:shadow-blue-500/40 hover:scale-[1.02]">
                        Dodaj
                    </button>
                </form>
            </div>
        </div>
    @endforeach
</div>

<script>
  function showGradePopup(gradeId, grade, weight, subject) {
    Swal.fire({
      title: `Przedmiot: ${subject}`,
      html: `
        <b>Ocena:</b> ${grade}<br>
        <b>Waga:</b> ${weight}
      `,
      icon: 'info',
      showCancelButton: true,
      confirmButtonText: 'Usuń ocenę',
      cancelButtonText: 'Zamknij',
      confirmButtonColor: '#d33',
      background: 'rgba(255, 255, 255, 0.05)',
      backdrop: 'rgba(0, 0, 0, 0.8)',
      color: '#fff',
      customClass: {
        popup: 'backdrop-blur-xl border border-white/10 rounded-2xl',
        confirmButton: 'bg-gradient-to-r from-red-500 to-red-600 hover:from-red-600 hover:to-red-700 shadow-lg shadow-red-500/30',
        cancelButton: 'bg-white/10 hover:bg-white/20 border border-white/20'
      }
    }).then((result) => {
      if (result.isConfirmed) {
        Swal.fire({
          title: "Na pewno chcesz usunąć?",
          text: "Nie będziesz mógł tego cofnąć!",
          icon: "warning",
          showCancelButton: true,
          confirmButtonColor: "#3085d6",
          cancelButtonColor: "#d33",
          confirmButtonText: "Tak, usuń to!",
          cancelButtonText: "Anuluj",
          background: 'rgba(255, 255, 255, 0.05)',
          backdrop: 'rgba(0, 0, 0, 0.8)',
          color: '#fff',
          customClass: {
            popup: 'backdrop-blur-xl border border-white/10 rounded-2xl',
            confirmButton: 'bg-gradient-to-r from-blue-500 to-blue-600 shadow-lg shadow-blue-500/30',
            cancelButton: 'bg-gradient-to-r from-red-500 to-red-600 shadow-lg shadow-red-500/30'
          }
        }).then((confirmResult) => {
          if (confirmResult.isConfirmed) {
            window.Livewire.dispatch('deleteGrade', { gradeId: gradeId });

            Swal.fire({
              title: "Usunięto!",
              text: "Ocena została usunięta.",
              icon: "success",
              timer: 1500,
              showConfirmButton: false,
              background: 'rgba(255, 255, 255, 0.05)',
              backdrop: 'rgba(0, 0, 0, 0.8)',
              color: '#fff',
              customClass: {
                popup: 'backdrop-blur-xl border border-white/10 rounded-2xl'
              }
            });
          }
        });
      }
    });
  }
</script>
