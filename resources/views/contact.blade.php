<x-layout>
    <x-slot name="title">
        Marco Corradi | Contatti
    </x-slot>
    @if (session('message'))
     <div class="alert alert-success">
        {{session('message')}}
     </div>
    @endif

        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card shadow">
                      <div class="card-body">
                          <h2 class="card-title text-center mb-4 abril-fatface-regular">Contatti</h2>
                          <ul class="list-unstyled">
                              <li>
                                <i class="bi bi-telephone me-2"></i>
                                <span class="fw-bold">Telefono:</span> 3492876244
                              </li>
                              <li>
                                <i class="bi bi-envelope me-2"></i>
                                <span class="fw-bold">Email:</span> <a href="mailto:marco.corradi.dev@gmail.com">marco.corradi.dev@gmail.com</a>
                              </li>
                          </ul>
                          <form action="{{ route('contact.send') }}" method="POST">
                          @csrf
                            <div class="mb-3">
                              <label for="userName" class="form-label "><strong>Inserisci il tuo nome</strong> </label>
                              <input type="text" name="name" class="form-control" id="userName">
                            </div>
                            <div class="mb-3">
                              <label for="userEmail" class="form-label"><strong>Inserisci la tua mail</strong> </label>
                              <input type="text" name="email" class="form-control" id="userEmail">
                            </div>
                            <div class="mb-3">
                              <label for="message" class="form-label"><strong>Messaggio</strong> </label>
                              <textarea class="form-control" id="message" name="message" rows="3" required></textarea>
                            </div>
                            <div class="text-center">
                              <button type="submit" class="btn buttonCustom">Invia Messaggio</button>
                            </div>
                          </form>
                     </div>
                    </div>
                </div>
            </div>
        </div>

</x-layout>
