<div class="admin__tool--element">
    <div class="admin__element--header">
        <h1>Warnings</h1>
    </div>
    <div class="admin__element--main">
        @foreach ($users as $user)
            <div class="admin__warning--main">
                <div class="admin__main--profile">
                    <div class="admin__profile--image">
                        <img class="admin__image" src="http://localhost/freedom/public/storage/{{ $user->profile_image }}" alt="Profile Image" />
                    </div>
                    <div class="admin__profile--text">
                        <h2 class="admin__text--name">{{ $user->name }}</h2>
                        <span class="admin__text--username">{{ __('@') }}{{ $user->username }}</span>
                    </div>
                </div>
                <div class="admin__main--count">
                    <p class="admin__count--text admin__count--{{ $user->warnings()->count() }}">{{ $user->warnings()->count() }}/3 warnings</p>
                </div>
                <div class="admin__main--options">
                    @livewire('warning-create', ['user' => $user], key($user->id_user))
                </div>
            </div>
        @endforeach
    </div>
</div>
