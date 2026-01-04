<?php

// @formatter:off
// phpcs:ignoreFile
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * @property int $id
 * @property int $user_id
 * @property string $titulo
 * @property string $descricao
 * @property int $prioridade
 * @property string $data_expiracao
 * @property string $concluida_em
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Metas newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Metas newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Metas query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Metas whereConcluidaEm($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Metas whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Metas whereDataExpiracao($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Metas whereDescricao($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Metas whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Metas wherePrioridade($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Metas whereTitulo($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Metas whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Metas whereUserId($value)
 * @mixin \Eloquent
 */
	#[\AllowDynamicProperties]
	class IdeHelperMetas {}
}

namespace App\Models{
/**
 * @property int $id
 * @property int $user_id
 * @property int $meta_id
 * @property string $titulo
 * @property string|null $descricao
 * @property \Illuminate\Support\Carbon|null $concluida_em
 * @property \Illuminate\Support\Carbon|null $data_expiracao
 * @property mixed $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Tarefa newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Tarefa newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Tarefa query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Tarefa whereConcluidaEm($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Tarefa whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Tarefa whereDataExpiracao($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Tarefa whereDescricao($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Tarefa whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Tarefa whereMetaId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Tarefa whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Tarefa whereTitulo($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Tarefa whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Tarefa whereUserId($value)
 * @mixin \Eloquent
 */
	#[\AllowDynamicProperties]
	class IdeHelperTarefa {}
}

namespace App\Models{
/**
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string|null $email_verified_at
 * @property string $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Laravel\Sanctum\PersonalAccessToken> $tokens
 * @property-read int|null $tokens_count
 * @method static \Database\Factories\UserFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User withTrashed(bool $withTrashed = true)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User withoutTrashed()
 * @mixin \Eloquent
 */
	#[\AllowDynamicProperties]
	class IdeHelperUser {}
}

