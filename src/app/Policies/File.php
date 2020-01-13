<?php

namespace LaravelEnso\Files\App\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
use LaravelEnso\Core\App\Models\User;
use LaravelEnso\Files\App\Contracts\AuthorizesFileAccess;
use LaravelEnso\Files\App\Models\File as Model;

class File
{
    use HandlesAuthorization;

    public function before(User $user)
    {
        if ($user->isAdmin() || $user->isSupervisor()) {
            return true;
        }
    }

    public function view(User $user, Model $file)
    {
        return $file->attachable instanceof AuthorizesFileAccess
            ? $file->attachable->viewableBy($user)
            : $this->ownsFile($user, $file);
    }

    public function share(User $user, Model $file)
    {
        return $file->attachable instanceof AuthorizesFileAccess
            ? $file->attachable->shareableBy($user)
            : $this->ownsFile($user, $file);
    }

    public function destroy(User $user, Model $file)
    {
        return $file->attachable instanceof AuthorizesFileAccess
            ? $file->attachable->destroyableBy($user)
            : $this->ownsFile($user, $file);
    }

    protected function ownsFile(User $user, Model $file)
    {
        return $user->id === (int) $file->created_by;
    }
}