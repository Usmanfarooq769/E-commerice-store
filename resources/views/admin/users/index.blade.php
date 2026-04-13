@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-md-12"> 
<div class="card custom-card ">
    <div class="card-header justify-content-between flex-wrap">
        <h6 class="card-title">All Users</h6>
        <span class="badge bg-primary" style="font-size:.85rem">{{ $users->total() }} total</span>
    </div>
    <div class="card-body p-0">
        <div class="table-responsive">
            <table class="table table-hover mb-0">
                <thead>
                    <tr>
                        <th style="width:50px">#</th>
                        <th>User</th>
                        <th>Email</th>
                        <th>Roles</th>
                        <th style="width:80px">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($users as $user)
                    <tr>
                        <td class="text-primary">{{ $loop->iteration }}</td>

                        <td>
                            <div class="d-flex align-items-center gap-2">
                                <div class="rounded-circle d-flex align-items-center justify-content-center flex-shrink-0"
                                     style="width:34px;height:34px;background:#ede9fe;color:#5b21b6;font-size:.75rem;font-weight:600">
                                    {{ strtoupper(substr($user->name, 0, 2)) }}
                                </div>
                                <span class="fw-medium" style="font-size:.875rem">{{ $user->name }}</span>
                            </div>
                        </td>

                        <td style="font-size:.875rem;color:#64748b">{{ $user->email }}</td>

                        <td>
                            @forelse($user->roles as $role)
                                <span class="role-badge {{ $role->name }}">{{ $role->name }}</span>
                            @empty
                                <span class="text-muted" style="font-size:.8rem">No role</span>
                            @endforelse
                        </td>

                        <td>
                            <a href="{{ route('admin.users.show', $user) }}"
                               class="btn btn-sm btn-primary-light" title="Manage Roles">
                                <i class="bi bi-person-gear"></i>
                            </a>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="5" class="text-center py-4 text-muted">No users found.</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
    @if($users->hasPages())
    <div class="card-footer bg-white">
        {{ $users->links() }}
    </div>
    @endif
</div>
  </div>
</div>
@endsection