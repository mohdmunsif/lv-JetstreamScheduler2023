<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Group;
use App\Models\Entity;
use App\Models\EntityGroup;
use Illuminate\Support\Str;
use Livewire\WithPagination;
use Illuminate\Support\Collection;
use function view;


class EntityGroupList extends Component
{
    use WithPagination;

    public Group $group;
    public Group $entity;

    // public Collection $entities;
    // public Collection $grouplist;

    public array $active;

    public int $editedEntityGroupId = 0;

    public bool $showModal = false;

    protected $listeners = ['delete'];


    public $groupArray = [];


    // public function mount() {

    //     $entities = Entity::all();
    //     $grouplist = Group::all();
    // }

    public function render()
    {

        $entities = Entity::all();
        $grouplist = Group::all();
        $entityGroups = EntityGroup::all();

        // dd($grouplist->count() );

        $cats = Group::orderBy('position')->paginate(10);
        $links = $cats->links();
        // $this->groups = collect($cats->items());

        // $this->active = $this->groups->mapWithKeys(
        //     fn ($item) => [$item['id'] => (bool) $item['is_active']]
        // )->toArray();

        // dd($grouplist);

        // dd(compact('grouplist'));

        // return view('livewire.entity-group-list', compact('grouplist') );

        return view('livewire.entity-group-list', [
            'links' => $links,  'entities' => $entities,  'grouplist' => $grouplist, 'entityGroups' => $entityGroups,
        ]);

        // return view('livewire.entity-group-list', [
        //     'links' => $links,  compact('entities'), compact('grouplist'),
        // ]);
    }

    public function openModal()
    {
        $this->showModal = true;

        $this->group = new Group();
    }

    public function updatedGroupName()
    {
        $this->group->slug = Str::slug($this->group->name);
    }

    public function save()
    {
        $this->validate();

        if ($this->editedEntityGroupId === 0) {
            $this->group->position = Group::max('position') + 1;
        }

        $this->group->save();

        $this->reset('showModal', 'editedEntityGroupId');
    }

    public function toggleIsActive($entityGroupId)
    {
        Group::where('id', $entityGroupId)->update([
            'is_active' => $this->active[$entityGroupId],
        ]);
    }

    public function editGroup($entityGroupId)
    {
        $this->editedEntityGroupId = $entityGroupId;

        $this->group = Group::find($entityGroupId);
    }

    public function cancelGroupEdit()
    {
        $this->reset('editedEntityGroupId');
    }

    public function deleteConfirm($method, $id = null)
    {
        $this->dispatchBrowserEvent('swal:confirm', [
            'type'  => 'warning',
            'title' => 'Are you sure?',
            'text'  => '',
            'id'    => $id,
            'method' => $method,
        ]);
    }

    public function delete($id)
    {
        Group::findOrFail($id)->delete();
    }

    public function updateOrder($list)
    {
        foreach ($list as $item) {
            $cat = $this->groups->firstWhere('id', $item['value']);

            if ($cat['position'] != $item['order']) {
                Group::where('id', $item['value'])->update(['position' => $item['order']]);
            }
        }
    }

    protected function rules(): array
    {
        return [
            'group.name'     => ['required', 'string', 'min:3'],
            'group.slug'     => ['nullable', 'string'],
            'group.position' => ['nullable', 'integer'],
        ];
    }
}
