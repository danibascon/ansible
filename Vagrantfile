# -*- mode: ruby -*-
# vi: set ft=ruby :

Vagrant.configure("2") do |config|
  config.vm.define :nodo1 do |nodo1|
    nodo1.vm.box = "debian/stretch64"
    nodo1.vm.hostname = "nodo1"
    nodo1.vm.network :private_network, ip: "192.168.26.1"
    nodo1.vm.provision "ansible" do |ansible|
	ansible.playbook = "playbooks/rol1/nodo1.yml"
    end
   end

 config.vm.define :nodo2 do |nodo2|
   nodo2.vm.box = "debian/stretch64"
    nodo2.vm.hostname = "nodo2"
    nodo2.vm.network :private_network, ip: "192.168.26.2"
    nodo2.vm.provision "ansible" do |ansible|
        ansible.playbook = "playbooks/rol2/nodo2.yml"
    end
 end
end

